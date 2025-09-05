<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maestro del Aprendizaje Acelerado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 20%, #667eea 40%, #4facfe 60%, #00f2fe 80%, #667eea 100%);
            background-size: 600% 600%;
            animation: brainWave 8s ease infinite;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        @keyframes brainWave {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .neural-network {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .neuron {
            position: absolute;
            width: 8px;
            height: 8px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            animation: neuronPulse 3s ease-in-out infinite;
        }

        @keyframes neuronPulse {
            0%, 100% { 
                transform: scale(1);
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            }
            50% { 
                transform: scale(1.5);
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.8), 0 0 40px rgba(102, 126, 234, 0.4);
            }
        }

        .connection {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.6), transparent);
            animation: dataFlow 4s linear infinite;
        }

        @keyframes dataFlow {
            0% { 
                opacity: 0;
                transform: scaleX(0);
            }
            50% { 
                opacity: 1;
                transform: scaleX(1);
            }
            100% { 
                opacity: 0;
                transform: scaleX(0);
            }
        }

        .knowledge-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 2;
        }

        .knowledge-bit {
            position: absolute;
            font-size: 1.5rem;
            color: rgba(255, 255, 255, 0.7);
            animation: knowledgeFloat 8s linear infinite;
            pointer-events: none;
        }

        @keyframes knowledgeFloat {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        .learning-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(30px);
            border-radius: 35px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            padding: 60px;
            max-width: 900px;
            width: 100%;
            box-shadow: 
                0 40px 80px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 5;
            animation: containerGlow 4s ease-in-out infinite;
        }

        @keyframes containerGlow {
            0%, 100% { 
                box-shadow: 
                    0 40px 80px rgba(0, 0, 0, 0.3),
                    inset 0 1px 0 rgba(255, 255, 255, 0.2);
            }
            50% { 
                box-shadow: 
                    0 40px 80px rgba(0, 0, 0, 0.3),
                    0 0 100px rgba(102, 126, 234, 0.4),
                    inset 0 1px 0 rgba(255, 255, 255, 0.3);
            }
        }

        .brain-circuit {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, 
                #4facfe 0%, #4facfe 25%, 
                transparent 25%, transparent 50%,
                #00f2fe 50%, #00f2fe 75%,
                transparent 75%, transparent 100%);
            background-size: 40px 100%;
            animation: circuitFlow 2s linear infinite;
            border-radius: 35px 35px 0 0;
        }

        @keyframes circuitFlow {
            0% { background-position: 0 0; }
            100% { background-position: 40px 0; }
        }

        .skill-header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .learning-icon {
            font-size: 5rem;
            margin-bottom: 25px;
            display: inline-block;
            animation: brainActivity 3s ease-in-out infinite;
            filter: drop-shadow(0 0 30px rgba(79, 172, 254, 0.8));
        }

        @keyframes brainActivity {
            0%, 100% { 
                transform: scale(1) rotate(0deg);
                filter: drop-shadow(0 0 30px rgba(79, 172, 254, 0.8));
            }
            33% { 
                transform: scale(1.1) rotate(2deg);
                filter: drop-shadow(0 0 40px rgba(79, 172, 254, 1)) drop-shadow(0 0 60px rgba(0, 242, 254, 0.6));
            }
            66% { 
                transform: scale(1.05) rotate(-2deg);
                filter: drop-shadow(0 0 35px rgba(0, 242, 254, 0.9));
            }
        }

        .skill-title {
            color: #fff;
            font-size: 3.8rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 0 0 40px rgba(79, 172, 254, 0.8);
            background: linear-gradient(45deg, #4facfe, #00f2fe, #ffffff, #667eea, #4facfe);
            background-size: 400% 400%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: titleProcessor 4s ease-in-out infinite;
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
        }

        @keyframes titleProcessor {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .skill-tagline {
            color: #4facfe;
            font-size: 1.4rem;
            font-weight: 700;
            text-shadow: 0 0 25px rgba(79, 172, 254, 0.6);
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: taglineSync 3s ease-in-out infinite alternate;
        }

        @keyframes taglineSync {
            from { 
                text-shadow: 0 0 25px rgba(79, 172, 254, 0.6);
                color: #4facfe;
            }
            to { 
                text-shadow: 0 0 35px rgba(79, 172, 254, 1), 0 0 50px rgba(0, 242, 254, 0.8);
                color: #00f2fe;
            }
        }

        .learning-speed {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }

        .speed-card {
            background: linear-gradient(135deg, rgba(79, 172, 254, 0.2), rgba(0, 242, 254, 0.2));
            border: 2px solid rgba(79, 172, 254, 0.4);
            border-radius: 25px;
            padding: 35px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(15px);
        }

        .speed-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #4facfe, transparent, #00f2fe, transparent, #4facfe);
            background-size: 400% 400%;
            animation: speedBorder 3s linear infinite;
            border-radius: 25px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .speed-card:hover::before {
            opacity: 1;
        }

        @keyframes speedBorder {
            0% { background-position: 0% 50%; }
            100% { background-position: 400% 50%; }
        }

        .speed-card:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow: 0 25px 50px rgba(79, 172, 254, 0.4);
            border-color: rgba(79, 172, 254, 0.8);
        }

        .speed-metric {
            font-size: 3.2rem;
            font-weight: 900;
            color: #4facfe;
            margin-bottom: 15px;
            text-shadow: 0 0 25px rgba(79, 172, 254, 0.8);
            animation: metricProcessor 2s ease-in-out infinite;
        }

        @keyframes metricProcessor {
            0%, 100% { 
                transform: scale(1);
                text-shadow: 0 0 25px rgba(79, 172, 254, 0.8);
            }
            50% { 
                transform: scale(1.1);
                text-shadow: 0 0 35px rgba(79, 172, 254, 1), 0 0 50px rgba(0, 242, 254, 0.6);
            }
        }

        .speed-label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .learning-philosophy {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.4), rgba(79, 172, 254, 0.1));
            border-radius: 30px;
            padding: 40px;
            margin: 40px 0;
            border: 2px solid rgba(79, 172, 254, 0.3);
            position: relative;
            overflow: hidden;
        }

        .learning-philosophy::before {
            content: '🧠';
            position: absolute;
            top: -18px;
            left: 30px;
            font-size: 2.5rem;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            padding: 10px 15px;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(79, 172, 254, 0.5);
            animation: brainIcon 3s ease-in-out infinite;
        }

        @keyframes brainIcon {
            0%, 100% { transform: scale(1) rotate(0deg); }
            33% { transform: scale(1.1) rotate(5deg); }
            66% { transform: scale(1.05) rotate(-3deg); }
        }

        .learning-philosophy h3 {
            color: #4facfe;
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 25px;
            margin-left: 40px;
            text-shadow: 0 0 25px rgba(79, 172, 254, 0.8);
            text-transform: uppercase;
        }

        .learning-philosophy p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.3rem;
            line-height: 1.8;
            text-align: justify;
            font-weight: 500;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.6);
        }

        .learning-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 50px 0;
        }

        .method-card {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 25px;
            padding: 30px;
            color: white;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .method-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }

        .method-card:hover {
            transform: translateY(-10px) rotate(2deg);
            box-shadow: 0 20px 40px rgba(79, 172, 254, 0.4);
            filter: brightness(1.1);
        }

        .method-card:hover::before {
            left: 100%;
        }

        .method-card:nth-child(2) {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }

        .method-card:nth-child(3) {
            background: linear-gradient(135deg, #00f2fe, #667eea);
        }

        .method-card:nth-child(4) {
            background: linear-gradient(135deg, #764ba2, #667eea);
        }

        .method-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
            animation: methodIconSpin 4s ease-in-out infinite;
        }

        @keyframes methodIconSpin {
            0%, 100% { transform: rotate(0deg) scale(1); }
            25% { transform: rotate(10deg) scale(1.1); }
            50% { transform: rotate(0deg) scale(1); }
            75% { transform: rotate(-10deg) scale(1.05); }
        }

        .method-title {
            font-size: 1.4rem;
            font-weight: 800;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .method-desc {
            font-size: 1.1rem;
            line-height: 1.6;
            opacity: 0.95;
            font-weight: 500;
        }

        .mastery-statement {
            text-align: center;
            margin-top: 50px;
            padding: 40px;
            background: linear-gradient(135deg, rgba(79, 172, 254, 0.3), rgba(0, 242, 254, 0.3));
            border-radius: 30px;
            border: 3px solid rgba(79, 172, 254, 0.6);
            position: relative;
            overflow: hidden;
        }

        .mastery-statement::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: masteryShine 5s linear infinite;
        }

        @keyframes masteryShine {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        .mastery-statement h3 {
            color: #4facfe;
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 0 0 30px rgba(79, 172, 254, 0.8);
            text-transform: uppercase;
            position: relative;
            z-index: 2;
        }

        .mastery-statement p {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.4rem;
            font-weight: 700;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
            position: relative;
            z-index: 2;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .learning-container {
                padding: 40px 25px;
                margin: 15px;
            }
            
            .skill-title {
                font-size: 2.8rem;
                letter-spacing: 2px;
            }
            
            .learning-speed {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 20px;
            }
            
            .speed-metric {
                font-size: 2.5rem;
            }
            
            .learning-methods {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="neural-network" id="neuralNetwork"></div>
    <div class="knowledge-particles" id="knowledgeParticles"></div>

    <div class="learning-container">
        <div class="brain-circuit"></div>
        
        <div class="skill-header">
            <div class="learning-icon">🧠⚡🎯</div>
            <h1 class="skill-title">Aprendizaje Cuántico</h1>
            <p class="skill-tagline">Absorbo, Proceso, Domino</p>
        </div>

        <div class="learning-speed">
            <div class="speed-card">
                <div class="speed-metric">10x</div>
                <div class="speed-label">Velocidad Normal</div>
            </div>
            <div class="speed-card">
                <div class="speed-metric">72h</div>
                <div class="speed-label">Dominio Básico</div>
            </div>
            <div class="speed-card">
                <div class="speed-metric">∞</div>
                <div class="speed-label">Capacidad Mental</div>
            </div>
            <div class="speed-card">
                <div class="speed-metric">100%</div>
                <div class="speed-label">Retención Info</div>
            </div>
        </div>

        <div class="learning-philosophy">
            <h3>Algoritmo Mental Superior</h3>
            <p>
                Mi cerebro funciona como un procesador de alto rendimiento optimizado para el aprendizaje acelerado. No es solo velocidad, es eficiencia pura. Cuando decido dominar algo, mi mente se convierte en una máquina de absorción de conocimiento que identifica patrones, conecta conceptos y sintetiza información a una velocidad que otros consideran imposible. Cada nuevo desafío es simplemente otro programa que mi sistema mental puede ejecutar y optimizar hasta la perfección.
            </p>
        </div>

        <div class="learning-methods">
            <div class="method-card">
                <span class="method-icon">🔬</span>
                <h4 class="method-title">Análisis Profundo</h4>
                <p class="method-desc">Descompongo cualquier habilidad en sus componentes fundamentales para entender su estructura desde la raíz.</p>
            </div>
            <div class="method-card">
                <span class="method-icon">⚡</span>
                <h4 class="method-title">Práctica Intensa</h4>
                <p class="method-desc">Aplico inmediatamente lo aprendido con repetición consciente y corrección continua de errores.</p>
            </div>
            <div class="method-card">
                <span class="method-icon">🎯</span>
                <h4 class="method-title">Enfoque Láser</h4>
                <p class="method-desc">Elimino distracciones y canalizo toda mi energía mental hacia el dominio de la nueva habilidad.</p>
            </div>
            <div class="method-card">
                <span class="method-icon">🔄</span>
                <h4 class="method-title">Iteración Rápida</h4>
                <p class="method-desc">Ciclos cortos de aprendizaje-práctica-mejora que aceleran exponencialmente mi progreso.</p>
            </div>
        </div>

        <div class="mastery-statement">
            <h3>Mi Supercomputadora Mental</h3>
            <p>"Dame cualquier habilidad y en tiempo récord te mostraré no solo cómo dominarla, sino cómo superarla. Mi mente no conoce límites cuando se trata de absorber y procesar nuevo conocimiento"</p>
        </div>
    </div>

    <script>
        // Crear red neuronal animada
        function createNeuralNetwork() {
            const network = document.getElementById('neuralNetwork');
            
            // Crear neuronas
            for (let i = 0; i < 15; i++) {
                const neuron = document.createElement('div');
                neuron.className = 'neuron';
                neuron.style.left = Math.random() * 100 + 'vw';
                neuron.style.top = Math.random() * 100 + 'vh';
                neuron.style.animationDelay = Math.random() * 3 + 's';
                network.appendChild(neuron);
            }
            
            // Crear conexiones
            for (let i = 0; i < 10; i++) {
                const connection = document.createElement('div');
                connection.className = 'connection';
                connection.style.left = Math.random() * 80 + 'vw';
                connection.style.top = Math.random() * 80 + 'vh';
                connection.style.width = Math.random() * 200 + 100 + 'px';
                connection.style.transform = `rotate(${Math.random() * 360}deg)`;
                connection.style.animationDelay = Math.random() * 4 + 's';
                network.appendChild(connection);
            }
        }

        // Crear partículas de conocimiento
        function createKnowledgeParticles() {
            const container = document.getElementById('knowledgeParticles');
            const symbols = ['📚', '💡', '🎓', '⚡', '🧠', '🔬', '🎯', '💎', '🚀', '⭐'];
            
            function createParticle() {
                const particle = document.createElement('div');
                particle.className = 'knowledge-bit';
                particle.textContent = symbols[Math.floor(Math.random() * symbols.length)];
                particle.style.left = Math.random() * 100 + 'vw';
                particle.style.animationDuration = (Math.random() * 6 + 4) + 's';
                particle.style.animationDelay = Math.random() * 2 + 's';
                
                container.appendChild(particle);
                
                setTimeout(() => {
                    particle.remove();
                }, 10000);
            }
            
            // Crear partícula cada 800ms
            setInterval(createParticle, 800);
        }
        
        // Iniciar efectos cuando la página carga
        window.addEventListener('load', () => {
            createNeuralNetwork();
            createKnowledgeParticles();
        });
    </script>
</body>
</html>