/**
 * Lusion Clone - Three.js Scene
 * Creates immersive 3D backgrounds and effects
 */

// ==========================================
// Hero Scene - Particle System
// ==========================================
class HeroScene {
    constructor() {
        this.container = document.getElementById('hero-canvas');
        if (!this.container) return;

        this.width = window.innerWidth;
        this.height = window.innerHeight;
        this.mouseX = 0;
        this.mouseY = 0;
        this.targetMouseX = 0;
        this.targetMouseY = 0;

        this.init();
        this.createParticles();
        this.createGeometry();
        this.animate();
        this.addEventListeners();
    }

    init() {
        // Scene
        this.scene = new THREE.Scene();
        this.scene.background = new THREE.Color(0x0a0a0a);

        // Camera
        this.camera = new THREE.PerspectiveCamera(75, this.width / this.height, 0.1, 1000);
        this.camera.position.z = 50;

        // Renderer
        this.renderer = new THREE.WebGLRenderer({
            canvas: this.container,
            antialias: true,
            alpha: true
        });
        this.renderer.setSize(this.width, this.height);
        this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

        // Clock for animations
        this.clock = new THREE.Clock();
    }

    createParticles() {
        const particleCount = 2000;
        const positions = new Float32Array(particleCount * 3);
        const colors = new Float32Array(particleCount * 3);
        const sizes = new Float32Array(particleCount);

        const color1 = new THREE.Color(0x6366f1); // Purple
        const color2 = new THREE.Color(0x818cf8); // Light purple
        const color3 = new THREE.Color(0xffffff); // White

        for (let i = 0; i < particleCount; i++) {
            const i3 = i * 3;

            // Position in a sphere
            const radius = 40 + Math.random() * 20;
            const theta = Math.random() * Math.PI * 2;
            const phi = Math.acos(2 * Math.random() - 1);

            positions[i3] = radius * Math.sin(phi) * Math.cos(theta);
            positions[i3 + 1] = radius * Math.sin(phi) * Math.sin(theta);
            positions[i3 + 2] = radius * Math.cos(phi) - 30;

            // Color
            const colorChoice = Math.random();
            let color;
            if (colorChoice < 0.33) {
                color = color1;
            } else if (colorChoice < 0.66) {
                color = color2;
            } else {
                color = color3;
            }

            colors[i3] = color.r;
            colors[i3 + 1] = color.g;
            colors[i3 + 2] = color.b;

            // Size
            sizes[i] = Math.random() * 2 + 0.5;
        }

        const geometry = new THREE.BufferGeometry();
        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));
        geometry.setAttribute('size', new THREE.BufferAttribute(sizes, 1));

        // Custom shader material
        const material = new THREE.ShaderMaterial({
            uniforms: {
                uTime: { value: 0 },
                uMouse: { value: new THREE.Vector2(0, 0) }
            },
            vertexShader: `
                attribute float size;
                varying vec3 vColor;
                uniform float uTime;
                uniform vec2 uMouse;

                void main() {
                    vColor = color;
                    vec3 pos = position;

                    // Add wave motion
                    pos.x += sin(pos.y * 0.1 + uTime * 0.5) * 2.0;
                    pos.y += cos(pos.x * 0.1 + uTime * 0.3) * 2.0;
                    pos.z += sin(pos.x * 0.05 + pos.y * 0.05 + uTime * 0.2) * 3.0;

                    // Mouse influence
                    float dist = length(pos.xy - uMouse * 30.0);
                    pos.z += smoothstep(20.0, 0.0, dist) * 5.0;

                    vec4 mvPosition = modelViewMatrix * vec4(pos, 1.0);
                    gl_PointSize = size * (200.0 / -mvPosition.z);
                    gl_Position = projectionMatrix * mvPosition;
                }
            `,
            fragmentShader: `
                varying vec3 vColor;

                void main() {
                    float dist = length(gl_PointCoord - vec2(0.5));
                    if (dist > 0.5) discard;

                    float alpha = 1.0 - smoothstep(0.0, 0.5, dist);
                    gl_FragColor = vec4(vColor, alpha * 0.8);
                }
            `,
            transparent: true,
            vertexColors: true,
            blending: THREE.AdditiveBlending,
            depthWrite: false
        });

        this.particles = new THREE.Points(geometry, material);
        this.scene.add(this.particles);
    }

    createGeometry() {
        // Create floating geometric shapes
        const geometries = [
            new THREE.IcosahedronGeometry(3, 1),
            new THREE.OctahedronGeometry(2.5, 0),
            new THREE.TetrahedronGeometry(2, 0)
        ];

        this.meshes = [];

        for (let i = 0; i < 8; i++) {
            const geometry = geometries[Math.floor(Math.random() * geometries.length)];
            const material = new THREE.MeshBasicMaterial({
                color: 0x6366f1,
                wireframe: true,
                transparent: true,
                opacity: 0.3
            });

            const mesh = new THREE.Mesh(geometry, material);
            mesh.position.set(
                (Math.random() - 0.5) * 80,
                (Math.random() - 0.5) * 60,
                (Math.random() - 0.5) * 40 - 20
            );
            mesh.rotation.set(
                Math.random() * Math.PI,
                Math.random() * Math.PI,
                Math.random() * Math.PI
            );
            mesh.userData.rotationSpeed = {
                x: (Math.random() - 0.5) * 0.01,
                y: (Math.random() - 0.5) * 0.01,
                z: (Math.random() - 0.5) * 0.01
            };

            this.meshes.push(mesh);
            this.scene.add(mesh);
        }

        // Add connecting lines
        this.createConnections();
    }

    createConnections() {
        const linesMaterial = new THREE.LineBasicMaterial({
            color: 0x6366f1,
            transparent: true,
            opacity: 0.1
        });

        const lineCount = 20;
        this.lines = [];

        for (let i = 0; i < lineCount; i++) {
            const points = [];
            const startX = (Math.random() - 0.5) * 100;
            const startY = (Math.random() - 0.5) * 80;
            const startZ = (Math.random() - 0.5) * 50 - 30;

            points.push(new THREE.Vector3(startX, startY, startZ));
            points.push(new THREE.Vector3(
                startX + (Math.random() - 0.5) * 30,
                startY + (Math.random() - 0.5) * 30,
                startZ + (Math.random() - 0.5) * 20
            ));

            const geometry = new THREE.BufferGeometry().setFromPoints(points);
            const line = new THREE.Line(geometry, linesMaterial);
            this.lines.push(line);
            this.scene.add(line);
        }
    }

    animate() {
        requestAnimationFrame(() => this.animate());

        const elapsedTime = this.clock.getElapsedTime();

        // Smooth mouse movement
        this.mouseX += (this.targetMouseX - this.mouseX) * 0.05;
        this.mouseY += (this.targetMouseY - this.mouseY) * 0.05;

        // Update particle uniforms
        if (this.particles) {
            this.particles.material.uniforms.uTime.value = elapsedTime;
            this.particles.material.uniforms.uMouse.value.set(this.mouseX, this.mouseY);
            this.particles.rotation.y = elapsedTime * 0.05;
        }

        // Rotate meshes
        this.meshes.forEach(mesh => {
            mesh.rotation.x += mesh.userData.rotationSpeed.x;
            mesh.rotation.y += mesh.userData.rotationSpeed.y;
            mesh.rotation.z += mesh.userData.rotationSpeed.z;

            // Floating animation
            mesh.position.y += Math.sin(elapsedTime + mesh.position.x) * 0.01;
        });

        // Camera movement based on mouse
        this.camera.position.x += (this.mouseX * 5 - this.camera.position.x) * 0.02;
        this.camera.position.y += (this.mouseY * 3 - this.camera.position.y) * 0.02;
        this.camera.lookAt(this.scene.position);

        this.renderer.render(this.scene, this.camera);
    }

    addEventListeners() {
        window.addEventListener('resize', () => this.onResize());
        window.addEventListener('mousemove', (e) => this.onMouseMove(e));
    }

    onResize() {
        this.width = window.innerWidth;
        this.height = window.innerHeight;

        this.camera.aspect = this.width / this.height;
        this.camera.updateProjectionMatrix();

        this.renderer.setSize(this.width, this.height);
    }

    onMouseMove(e) {
        this.targetMouseX = (e.clientX / this.width) * 2 - 1;
        this.targetMouseY = -(e.clientY / this.height) * 2 + 1;
    }
}

// ==========================================
// Labs Scene - DNA/Helix Animation
// ==========================================
class LabsScene {
    constructor() {
        this.container = document.getElementById('labs-canvas');
        if (!this.container) return;

        this.width = this.container.clientWidth;
        this.height = this.container.clientHeight;

        this.init();
        this.createHelix();
        this.animate();
        this.addEventListeners();
    }

    init() {
        this.scene = new THREE.Scene();
        this.scene.background = new THREE.Color(0x1a1a1a);

        this.camera = new THREE.PerspectiveCamera(60, this.width / this.height, 0.1, 1000);
        this.camera.position.set(0, 0, 30);

        this.renderer = new THREE.WebGLRenderer({
            canvas: this.container,
            antialias: true,
            alpha: true
        });
        this.renderer.setSize(this.width, this.height);
        this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

        this.clock = new THREE.Clock();
    }

    createHelix() {
        this.helixGroup = new THREE.Group();

        const strandCount = 2;
        const pointsPerStrand = 100;
        const radius = 5;
        const height = 40;

        for (let s = 0; s < strandCount; s++) {
            const points = [];
            const phaseOffset = s * Math.PI;

            for (let i = 0; i < pointsPerStrand; i++) {
                const t = i / pointsPerStrand;
                const angle = t * Math.PI * 6 + phaseOffset;
                const y = (t - 0.5) * height;
                const x = Math.cos(angle) * radius;
                const z = Math.sin(angle) * radius;
                points.push(new THREE.Vector3(x, y, z));
            }

            const curve = new THREE.CatmullRomCurve3(points);
            const geometry = new THREE.TubeGeometry(curve, 200, 0.3, 8, false);
            const material = new THREE.MeshBasicMaterial({
                color: s === 0 ? 0x6366f1 : 0x818cf8,
                transparent: true,
                opacity: 0.8
            });

            const strand = new THREE.Mesh(geometry, material);
            this.helixGroup.add(strand);
        }

        // Add connecting bars
        for (let i = 0; i < 20; i++) {
            const t = i / 20;
            const angle = t * Math.PI * 6;
            const y = (t - 0.5) * height;

            const x1 = Math.cos(angle) * radius;
            const z1 = Math.sin(angle) * radius;
            const x2 = Math.cos(angle + Math.PI) * radius;
            const z2 = Math.sin(angle + Math.PI) * radius;

            const geometry = new THREE.CylinderGeometry(0.1, 0.1, radius * 2, 8);
            const material = new THREE.MeshBasicMaterial({
                color: 0xffffff,
                transparent: true,
                opacity: 0.3
            });

            const bar = new THREE.Mesh(geometry, material);
            bar.position.set(0, y, 0);
            bar.rotation.z = Math.PI / 2;
            bar.rotation.y = angle;
            this.helixGroup.add(bar);
        }

        // Add floating particles
        const particleGeometry = new THREE.BufferGeometry();
        const particleCount = 500;
        const positions = new Float32Array(particleCount * 3);

        for (let i = 0; i < particleCount; i++) {
            positions[i * 3] = (Math.random() - 0.5) * 50;
            positions[i * 3 + 1] = (Math.random() - 0.5) * 50;
            positions[i * 3 + 2] = (Math.random() - 0.5) * 50;
        }

        particleGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

        const particleMaterial = new THREE.PointsMaterial({
            color: 0x6366f1,
            size: 0.1,
            transparent: true,
            opacity: 0.5,
            blending: THREE.AdditiveBlending
        });

        this.particles = new THREE.Points(particleGeometry, particleMaterial);
        this.scene.add(this.particles);

        this.scene.add(this.helixGroup);
    }

    animate() {
        requestAnimationFrame(() => this.animate());

        const elapsedTime = this.clock.getElapsedTime();

        if (this.helixGroup) {
            this.helixGroup.rotation.y = elapsedTime * 0.2;
        }

        if (this.particles) {
            this.particles.rotation.y = -elapsedTime * 0.05;
        }

        this.renderer.render(this.scene, this.camera);
    }

    addEventListeners() {
        window.addEventListener('resize', () => {
            this.width = this.container.clientWidth;
            this.height = this.container.clientHeight;

            this.camera.aspect = this.width / this.height;
            this.camera.updateProjectionMatrix();

            this.renderer.setSize(this.width, this.height);
        });
    }
}

// ==========================================
// Project Card Scenes
// ==========================================
class ProjectScene {
    constructor(canvas, type) {
        this.canvas = canvas;
        this.type = type;

        if (!this.canvas) return;

        this.width = this.canvas.clientWidth;
        this.height = this.canvas.clientHeight;

        this.init();
        this.createScene();
        this.animate();
    }

    init() {
        this.scene = new THREE.Scene();

        this.camera = new THREE.PerspectiveCamera(60, this.width / this.height, 0.1, 100);
        this.camera.position.z = 20;

        this.renderer = new THREE.WebGLRenderer({
            canvas: this.canvas,
            antialias: true,
            alpha: true
        });
        this.renderer.setSize(this.width, this.height);
        this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        this.renderer.setClearColor(0x000000, 0);

        this.clock = new THREE.Clock();
    }

    createScene() {
        switch (this.type) {
            case 'porsche':
                this.createCarScene();
                break;
            case 'meta':
                this.createMetaScene();
                break;
            case 'synthetic':
                this.createAIScene();
                break;
            case 'soda':
                this.createSodaScene();
                break;
            case 'nft':
                this.createNFTScene();
                break;
            case 'cosmos':
                this.createCosmosScene();
                break;
            default:
                this.createDefaultScene();
        }
    }

    createCarScene() {
        // Car-inspired geometric shape
        const geometry = new THREE.TorusKnotGeometry(5, 1.5, 100, 16);
        const material = new THREE.MeshBasicMaterial({
            color: 0xff3366,
            wireframe: true
        });
        this.mesh = new THREE.Mesh(geometry, material);
        this.scene.add(this.mesh);
    }

    createMetaScene() {
        // Infinity symbol / VR-inspired
        const curve = new THREE.TorusKnotGeometry(4, 1, 128, 32, 2, 3);
        const material = new THREE.MeshBasicMaterial({
            color: 0x0077ff,
            wireframe: true
        });
        this.mesh = new THREE.Mesh(curve, material);
        this.scene.add(this.mesh);
    }

    createAIScene() {
        // Neural network-inspired
        const geometry = new THREE.IcosahedronGeometry(6, 2);
        const material = new THREE.MeshBasicMaterial({
            color: 0x00ff88,
            wireframe: true
        });
        this.mesh = new THREE.Mesh(geometry, material);
        this.scene.add(this.mesh);
    }

    createSodaScene() {
        // Bubble-like scene
        const geometry = new THREE.SphereGeometry(5, 32, 32);
        const material = new THREE.MeshBasicMaterial({
            color: 0xff6600,
            wireframe: true
        });
        this.mesh = new THREE.Mesh(geometry, material);
        this.scene.add(this.mesh);
    }

    createNFTScene() {
        // Crystal / gem shape
        const geometry = new THREE.OctahedronGeometry(6, 0);
        const material = new THREE.MeshBasicMaterial({
            color: 0x9945FF,
            wireframe: true
        });
        this.mesh = new THREE.Mesh(geometry, material);
        this.scene.add(this.mesh);
    }

    createCosmosScene() {
        // Space / galaxy inspired
        const geometry = new THREE.DodecahedronGeometry(5, 1);
        const material = new THREE.MeshBasicMaterial({
            color: 0x4444ff,
            wireframe: true
        });
        this.mesh = new THREE.Mesh(geometry, material);
        this.scene.add(this.mesh);
    }

    createDefaultScene() {
        const geometry = new THREE.BoxGeometry(6, 6, 6);
        const material = new THREE.MeshBasicMaterial({
            color: 0x6366f1,
            wireframe: true
        });
        this.mesh = new THREE.Mesh(geometry, material);
        this.scene.add(this.mesh);
    }

    animate() {
        requestAnimationFrame(() => this.animate());

        const elapsedTime = this.clock.getElapsedTime();

        if (this.mesh) {
            this.mesh.rotation.x = elapsedTime * 0.3;
            this.mesh.rotation.y = elapsedTime * 0.5;
        }

        this.renderer.render(this.scene, this.camera);
    }
}

// ==========================================
// Initialize all scenes
// ==========================================
document.addEventListener('DOMContentLoaded', () => {
    // Initialize Hero Scene
    new HeroScene();

    // Initialize Labs Scene
    new LabsScene();

    // Initialize Project Card Scenes
    const projectPlaceholders = document.querySelectorAll('.project-image-placeholder');
    projectPlaceholders.forEach(placeholder => {
        const canvas = placeholder.querySelector('.project-canvas');
        const type = placeholder.dataset.project;
        if (canvas) {
            new ProjectScene(canvas, type);
        }
    });
});

// Global function to update Three.js scenes on resize
function updateThreeScene() {
    // Scenes handle their own resize through event listeners
}
