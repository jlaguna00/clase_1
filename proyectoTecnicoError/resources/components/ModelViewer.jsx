import React, { useRef } from 'react';
import { Canvas, useFrame } from 'react-three-fiber';
import { OrbitControls } from 'drei';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader';
import { PerspectiveCamera, DirectionalLight } from 'three';

function ModelViewer() {
    const camera = useRef();
    const sun = useRef();

    useFrame(() => {
        camera.current.lookAt(0, 0, 0);
        sun.current.position.set(5, 5, 5);
    });

    return (
        <Canvas>
            <PerspectiveCamera ref={camera} position={[0, 0, 5]} />
            <directionalLight ref={sun} intensity={1} color="white" position={[5, 5, 5]} />
            <OrbitControls />
            <Model />
        </Canvas>
    );
}

function Model() {
    const gltfLoader = new GLTFLoader();
    const [model, setModel] = React.useState(null);

    React.useEffect(() => {
        gltfLoader.load('modelo3D/models_BloqueAyB-3D.glb', setModel);
    }, []);

    return model ? <primitive object={model.scene} /> : null;
}

export default ModelViewer;