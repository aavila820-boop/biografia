<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angelo - Narración de Mi Presente</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Orbitron:wght@400;700;900&family=Poppins:wght@300;400;500;600;700;800&family=Russo+One&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            min-height: 100vh;
            background: 
                conic-gradient(from 0deg at 30% 30%, #00d4ff 0deg, #020024 60deg, #090979 120deg, #00d4ff 180deg),
                conic-gradient(from 180deg at 70% 70%, #ff0080 0deg, #7928ca 60deg, #ff0080 120deg, #4c1d95 180deg),
                radial-gradient(circle at 20% 20%, #00f5ff 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, #ff006e 0%, transparent 50%),
                linear-gradient(135deg, #0c0c0c 0%, #1a1a2e 25%, #16213e 50%, #0f3460 75%, #0a0a0a 100%);
            background-size: 800% 800%, 800% 800%, 400% 400%, 400% 400%, 100% 100%;
            animation: presentBackground 35s ease-in-out infinite;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            position: relative;
        }
        
        @keyframes presentBackground {
            0%, 100% { 
                background-position: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
                filter: hue-rotate(0deg) brightness(0.9) saturate(1.2);
            }
            25% { 
                background-position: 50% 50%, 25% 75%, 25% 25%, 75% 75%, 0% 0%;
                filter: hue-rotate(90deg) brightness(1.2) saturate(1.4);
            }
            50% { 
                background-position: 100% 100%, 50% 50%, 50% 50%, 50% 50%, 0% 0%;
                filter: hue-rotate(180deg) brightness(0.8) saturate(1.6);
            }
            75% { 
                background-position: 50% 0%, 75% 25%, 75% 75%, 25% 25%, 0% 0%;
                filter: hue-rotate(270deg) brightness(1.1) saturate(1.3);
            }
        }
        
        /* Efectos de fondo dinámicos */
        .dynamic-elements {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        
        .floating-element {
            position: absolute;
            font-size: 2.5rem;
            animation: elementFlow 25s linear infinite;
            opacity: 0.3;
        }
        
        .gym-element {
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }
        
        .engineering-element {
            top: 30%;
            right: 10%;
            animation-delay: 8s;
        }
        
        .moto-element {
            top: 60%;
            left: 8%;
            animation-delay: 16s;
        }
        
        .unab-element {
            top: 80%;
            right: 5%;
            animation-delay: 12s;
        }
        
        .life-element {
            top: 45%;
            left: 90%;
            animation-delay: 4s;
        }
        
        @keyframes elementFlow {
            0% { 
                transform: translateY(0) rotate(0deg) scale(1);
                opacity: 0.3;
                filter: hue-rotate(0deg);
            }
            20% { 
                transform: translateY(-40px) rotate(72deg) scale(1.3);
                opacity: 0.6;
                filter: hue-rotate(72deg);
            }
            40% { 
                transform: translateY(20px) rotate(144deg) scale(0.8);
                opacity: 0.4;
                filter: hue-rotate(144deg);
            }
            60% { 
                transform: translateY(-25px) rotate(216deg) scale(1.1);
                opacity: 0.7;
                filter: hue-rotate(216deg);
            }
            80% { 
                transform: translateY(15px) rotate(288deg) scale(0.9);
                opacity: 0.5;
                filter: hue-rotate(288deg);
            }
            100% { 
                transform: translateY(0) rotate(360deg) scale(1);
                opacity: 0.3;
                filter: hue-rotate(360deg);
            }
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 70px 20px;
            position: relative;
            z-index: 2;
        }
        
        .main-title {
            text-align: center;
            font-family: 'Russo One', sans-serif;
            font-size: 5.5rem;
            font-weight: 400;
            background: linear-gradient(45deg, 
                #00d4ff, #ff006e, #7928ca, #00f5ff, #ff0080, #00d4ff);
            background-size: 500% 500%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: presentGradient 6s ease-in-out infinite;
            margin-bottom: 30px;
            text-shadow: 0 0 100px rgba(0, 212, 255, 0.7);
            letter-spacing: 5px;
            position: relative;
            transform: perspective(500px) rotateX(10deg);
        }
        
        .main-title::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            background: linear-gradient(45deg, #00d4ff, #ff006e, #7928ca, #00f5ff);
            z-index: -1;
            border-radius: 25px;
            filter: blur(25px);
            animation: titleAuraPresent 5s ease-in-out infinite alternate;
        }
        
        @keyframes presentGradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        @keyframes titleAuraPresent {
            0% { opacity: 0.5; transform: scale(0.9) rotate(0deg); }
            100% { opacity: 0.9; transform: scale(1.1) rotate(2deg); }
        }
        
        .subtitle {
            text-align: center;
            font-family: 'Rajdhani', sans-serif;
            font-size: 1.6rem;
            color: #00f5ff;
            font-weight: 600;
            margin-bottom: 70px;
            letter-spacing: 3px;
            text-transform: uppercase;
            animation: subtitleCyber 4s ease-in-out infinite;
        }
        
        @keyframes subtitleCyber {
            0%, 100% { 
                opacity: 0.8; 
                text-shadow: 0 0 15px #00f5ff; 
                transform: translateZ(0);
            }
            50% { 
                opacity: 1; 
                text-shadow: 0 0 30px #00f5ff, 0 0 50px #ff006e; 
                transform: translateZ(10px);
            }
        }
        
        .lifestyle-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }
        
        .lifestyle-card {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.15), 
                rgba(255, 255, 255, 0.08));
            backdrop-filter: blur(35px);
            border: 3px solid rgba(0, 212, 255, 0.4);
            border-radius: 30px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.2),
                0 0 80px rgba(0, 212, 255, 0.2);
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform: perspective(1000px);
        }
        
        .lifestyle-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(0, 212, 255, 0.2), 
                transparent);
            animation: cardShimmerPresent 10s linear infinite;
        }
        
        @keyframes cardShimmerPresent {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        .lifestyle-card:hover {
            transform: perspective(1000px) rotateY(5deg) rotateX(5deg) scale(1.05);
            border-color: rgba(255, 0, 110, 0.6);
            box-shadow: 
                0 40px 80px rgba(0, 0, 0, 0.4),
                0 0 120px rgba(255, 0, 110, 0.4);
        }
        
        .card-icon {
            font-size: 4rem;
            text-align: center;
            margin-bottom: 25px;
            display: block;
            animation: iconLevitate 5s ease-in-out infinite;
            position: relative;
            z-index: 1;
        }
        
        .lifestyle-card:nth-child(2) .card-icon { animation-delay: 1.5s; }
        .lifestyle-card:nth-child(3) .card-icon { animation-delay: 3s; }
        
        @keyframes iconLevitate {
            0%, 100% { 
                transform: translateY(0) rotateZ(0deg); 
                filter: drop-shadow(0 0 10px currentColor);
            }
            50% { 
                transform: translateY(-15px) rotateZ(5deg); 
                filter: drop-shadow(0 5px 15px currentColor);
            }
        }
        
        .card-title {
            font-family: 'Orbitron', monospace;
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(45deg, #00d4ff, #ff006e);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
            text-align: center;
            letter-spacing: 2px;
            position: relative;
            z-index: 1;
        }
        
        .card-content {
            font-size: 1.15rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.9);
            text-align: justify;
            position: relative;
            z-index: 1;
        }
        
        .highlight-present {
            background: linear-gradient(120deg, #00d4ff, #ff006e, #7928ca);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
            text-shadow: 0 0 20px rgba(0, 212, 255, 0.5);
            position: relative;
        }
        
        .highlight-present::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #00d4ff, #ff006e, #7928ca);
            animation: highlightFlowPresent 3s ease-in-out infinite;
        }
        
        @keyframes highlightFlowPresent {
            0%, 100% { 
                opacity: 0.6; 
                transform: scaleX(1); 
                filter: blur(0px);
            }
            50% { 
                opacity: 1; 
                transform: scaleX(1.2); 
                filter: blur(1px);
            }
        }
        
        .current-status {
            background: linear-gradient(135deg, 
                rgba(0, 212, 255, 0.2), 
                rgba(121, 40, 202, 0.2));
            border: 3px solid rgba(0, 212, 255, 0.5);
            border-radius: 25px;
            padding: 50px;
            margin: 50px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .current-status::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, 
                rgba(0, 212, 255, 0.1), 
                rgba(255, 0, 110, 0.1));
            animation: statusPulse 4s ease-in-out infinite;
        }
        
        @keyframes statusPulse {
            0%, 100% { 
                opacity: 0.5; 
                transform: scale(1); 
                filter: hue-rotate(0deg);
            }
            50% { 
                opacity: 1; 
                transform: scale(1.02); 
                filter: hue-rotate(180deg);
            }
        }
        
        .status-title {
            font-family: 'Russo One', sans-serif;
            font-size: 3rem;
            color: #00d4ff;
            margin-bottom: 25px;
            text-shadow: 0 0 30px rgba(0, 212, 255, 0.7);
            position: relative;
            z-index: 1;
            animation: statusTitleGlow 3s ease-in-out infinite;
        }
        
        @keyframes statusTitleGlow {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); text-shadow: 0 0 40px rgba(0, 212, 255, 0.9); }
        }
        
        .status-text {
            font-size: 1.4rem;
            color: #fff;
            font-weight: 600;
            position: relative;
            z-index: 1;
            line-height: 1.7;
            font-family: 'Rajdhani', sans-serif;
        }
        
        .achievements-present {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin: 60px 0;
        }
        
        .achievement-present {
            background: linear-gradient(135deg, 
                rgba(255, 0, 110, 0.2), 
                rgba(0, 212, 255, 0.2));
            border: 2px solid rgba(255, 0, 110, 0.4);
            border-radius: 20px;
            padding: 35px;
            text-align: center;
            transition: all 0.5s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .achievement-present::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, 
                rgba(255, 0, 110, 0.1), 
                rgba(0, 212, 255, 0.1));
            transform: scale(0);
            border-radius: 50%;
            transition: transform 0.6s ease;
        }
        
        .achievement-present:hover::before {
            transform: scale(3);
        }
        
        .achievement-present:hover {
            transform: translateY(-20px) rotateY(10deg);
            border-color: #00d4ff;
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.3),
                0 0 60px rgba(0, 212, 255, 0.5);
        }
        
        .achievement-icon-present {
            font-size: 4rem;
            margin-bottom: 20px;
            display: block;
            animation: achievementFloat 6s ease-in-out infinite;
            position: relative;
            z-index: 1;
        }
        
        .achievement-present:nth-child(2) .achievement-icon-present { animation-delay: 2s; }
        .achievement-present:nth-child(3) .achievement-icon-present { animation-delay: 4s; }
        
        @keyframes achievementFloat {
            0%, 100% { 
                transform: translateY(0) rotateZ(0deg) scale(1); 
                filter: drop-shadow(0 0 10px currentColor);
            }
            33% { 
                transform: translateY(-10px) rotateZ(5deg) scale(1.1); 
                filter: drop-shadow(0 5px 20px currentColor);
            }
            66% { 
                transform: translateY(5px) rotateZ(-3deg) scale(0.95); 
                filter: drop-shadow(0 2px 15px currentColor);
            }
        }
        
        .achievement-value-present {
            font-family: 'Orbitron', monospace;
            font-size: 2.2rem;
            color: #ff006e;
            margin-bottom: 15px;
            text-shadow: 0 0 20px rgba(255, 0, 110, 0.6);
            position: relative;
            z-index: 1;
            font-weight: 700;
        }
        
        .achievement-label-present {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.8);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 600;
            position: relative;
            z-index: 1;
            font-family: 'Rajdhani', sans-serif;
        }
        
        .life-philosophy {
            background: linear-gradient(135deg, 
                rgba(121, 40, 202, 0.2), 
                rgba(0, 212, 255, 0.15));
            border: 3px solid rgba(121, 40, 202, 0.5);
            border-radius: 30px;
            padding: 50px;
            margin: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .life-philosophy::before {
            content: '"';
            font-size: 10rem;
            color: rgba(121, 40, 202, 0.2);
            position: absolute;
            top: -30px;
            left: 30px;
            font-family: serif;
            z-index: 0;
        }
        
        .life-philosophy::after {
            content: '"';
            font-size: 10rem;
            color: rgba(121, 40, 202, 0.2);
            position: absolute;
            bottom: -50px;
            right: 30px;
            font-family: serif;
            z-index: 0;
        }
        
        .philosophy-text {
            font-family: 'Rajdhani', sans-serif;
            font-size: 1.8rem;
            font-weight: 600;
            color: #7928ca;
            line-height: 1.8;
            position: relative;
            z-index: 1;
            text-shadow: 0 0 15px rgba(121, 40, 202, 0.4);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .main-title {
                font-size: 3.5rem;
                letter-spacing: 3px;
            }
            
            .lifestyle-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .lifestyle-card {
                padding: 30px 20px;
                margin: 10px;
            }
            
            .achievements-present {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
        
        @media (max-width: 480px) {
            .main-title {
                font-size: 2.8rem;
                letter-spacing: 2px;
            }
            
            .card-content {
                font-size: 1.1rem;
            }
            
            .philosophy-text {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="dynamic-elements">
        <div class="floating-element gym-element">💪</div>
        <div class="floating-element engineering-element">⚙️</div>
        <div class="floating-element moto-element">🏍️</div>
        <div class="floating-element unab-element">🎓</div>
        <div class="floating-element life-element">✨</div>
    </div>
    
    <div class="container">
        <h1 class="main-title">NARRACIÓN DE MI PRESENTE</h1>
        <p class="subtitle">La Vida en Movimiento</p>
        
        <div class="lifestyle-grid">
            <div class="lifestyle-card">
                <span class="card-icon">💪</span>
                <h2 class="card-title">EL TEMPLO DEL HIERRO</h2>
                <div class="card-content">
                    El gimnasio ya no es solo un lugar, es mi <span class="highlight-present">segundo hogar</span>. Cada mañana, Angelo se levanta con una misión clara: superar al Angelo de ayer. Las rutinas se han vuelto rituales sagrados, cada repetición es una conversación con mis límites, cada peso añadido es un paso más hacia la versión más fuerte de mí mismo.
                    <br><br>
                    La disciplina que aprendí levantando hierro ahora se refleja en cada aspecto de mi vida. <span class="highlight-present">Juicioso y constante</span>, transformando mi cuerpo mientras fortalezco mi mente. El gym me enseñó que la verdadera fuerza no está en los músculos, sino en la mentalidad de nunca rendirse.
                </div>
            </div>
            
            <div class="lifestyle-card">
                <span class="card-icon">⚙️</span>
                <h2 class="card-title">FORJANDO EL FUTURO</h2>
                <div class="card-content">
                    <span class="highlight-present">Sexto semestre de Ingeniería en la UNAB</span> - cada ecuación resuelta es un ladrillo más en la construcción de mis sueños. Los números, las fórmulas, los proyectos... todo tiene sentido cuando entiendes que estás creando el futuro con tus propias manos.
                    <br><br>
                    Las noches de desvelo estudiando no son sacrificios, son inversiones. Cada parcial aprobado, cada concepto dominado, cada problema resuelto me acerca más a ser el <span class="highlight-present">ingeniero que Colombia necesita</span>. En las aulas de la UNAB, Angelo no solo aprende ingeniería, aprende a pensar como un solucionador de problemas.
                </div>
            </div>
            
            <div class="lifestyle-card">
                <span class="card-icon">🏍️</span>
                <h2 class="card-title">LIBERTAD SOBRE DOS RUEDAS</h2>
                <div class="card-content">
                    Mi <span class="highlight-present">GN</span> no es solo una moto, es mi compañera de aventuras, mi escape hacia la libertad. Cuando el acelerador responde y el viento golpea mi cara, Angelo se conecta con la esencia más pura de vivir el momento.
                    <br><br>
                    Cada ruta es una nueva historia, cada curva es una lección de equilibrio, cada kilómetro recorrido es un recordatorio de que la vida está hecha para ser vivida <span class="highlight-present">sin miedo y con pasión</span>. En mi moto, no hay límites, solo horizontes por descubrir.
                </div>
            </div>
        </div>
        
        <div class="current-status">
            <h3 class="status-title">🚀 ESTADO ACTUAL</h3>
            <div class="status-text">
                Angelo en su mejor momento: <span class="highlight-present">equilibrando el hierro del gimnasio con los libros de ingeniería, navegando las calles en su GN mientras construye el futuro que siempre soñó</span>. Cada día es una oportunidad de crecer, cada desafío es una invitación a superarse.
            </div>
        </div>
        
        <div class="achievements-present">
            <div class="achievement-present">
                <span class="achievement-icon-present">🎓</span>
                <div class="achievement-value-present">6to</div>
                <div class="achievement-label-present">Semestre UNAB</div>
            </div>
            <div class="achievement-present">
                <span class="achievement-icon-present">💪</span>
                <div class="achievement-value-present">DAILY</div>
                <div class="achievement-label-present">Gym Routine</div>
            </div>
            <div class="achievement-present">
                <span class="achievement-icon-present">🏍️</span>
                <div class="achievement-value-present">GN</div>
                <div class="achievement-label-present">Freedom Machine</div>
            </div>
        </div>
        
        <div class="life-philosophy">
            <div class="philosophy-text">
                La vida es chimba cuando entiendes que cada día es una página en blanco esperando a ser llenada con aventuras, conocimiento y crecimiento. Angelo vive el presente construyendo el futuro, siempre aprendiendo, siempre evolucionando.
            </div>
        </div>
    </div>

    <script>
        // Efectos interactivos épicos para el presente
        document.querySelectorAll('.lifestyle-card').forEach((card, index) => {
            card.addEventListener('mouseenter', function() {
                this.style.animation = 'cardGlowPresent 1s ease-out';
                createPresentParticles(this, index);
                
                // Sonido visual
                this.style.filter = 'brightness(1.2) saturate(1.3)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.animation = '';
                this.style.filter = '';
            });
        });
        
        // Efectos especiales en achievements
        document.querySelectorAll('.achievement-present').forEach(achievement => {
            achievement.addEventListener('click', function() {
                this.style.animation = 'achievementBlast 1.2s cubic-bezier(0.68, -0.55, 0.265, 1.55)';
                
                // Crear explosión de partículas cibernéticas
                for (let i = 0; i < 15; i++) {
                    createCyberParticle(this);
                }
                
                // Efecto de onda expansiva
                createShockwave(this);
                
                setTimeout(() => {
                    this.style.animation = '';
                }, 1200);
            });
        });
        
        function createPresentParticles(element, type) {
            const colors = [
                ['#00d4ff', '#ff006e'], // Gym
                ['#7928ca', '#00f5ff'], // Engineering  
                ['#ff0080', '#00d4ff']  // Moto
            ];
            
            for (let i = 0; i < 8; i++) {
                const particle = document.createElement('div');
                const rect = element.getBoundingClientRect();
                
                particle.style.cssText = `
                    position: fixed;
                    width: 10px;
                    height: 10px;
                    background: linear-gradient(45deg, ${colors[type][0]}, ${colors[type][1]});
                    border-radius: 50%;
                    pointer-events: none;
                    z-index: 1000;
                    left: ${rect.left + Math.random() * rect.width}px;
                    top: ${rect.top + Math.random() * rect.height}px;
                    box-shadow: 
                        0 0 20px ${colors[type][0]},
                        0 0 40px ${colors[type][1]};
                `;
                
                document.body.appendChild(particle);
                
                particle.animate([
                    { 
                        transform: 'scale(1) translateY(0) rotate(0deg)', 
                        opacity: 1,
                        filter: 'hue-rotate(0deg)'
                    },
                    {