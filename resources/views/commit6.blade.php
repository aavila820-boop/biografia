<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angelo - Narración de Mis Aspiraciones</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;500;600;700;800;900&family=Orbitron:wght@400;700;900&family=Poppins:wght@300;400;500;600;700;800&family=Audiowide&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            min-height: 100vh;
            background: 
                radial-gradient(ellipse at 25% 10%, #ff0050 0%, transparent 40%),
                radial-gradient(ellipse at 75% 10%, #00ff88 0%, transparent 40%),
                radial-gradient(ellipse at 25% 90%, #0099ff 0%, transparent 40%),
                radial-gradient(ellipse at 75% 90%, #ff6600 0%, transparent 40%),
                radial-gradient(ellipse at 50% 50%, #8800ff 0%, transparent 30%),
                conic-gradient(from 0deg at 50% 50%, #ff0050, #00ff88, #0099ff, #ff6600, #8800ff, #ff0050),
                linear-gradient(135deg, #0a0a0a 0%, #1a0a2e 20%, #2e1a4a 40%, #4a1a2e 60%, #2e4a1a 80%, #0a0a0a 100%);
            background-size: 
                600% 600%, 600% 600%, 600% 600%, 600% 600%, 400% 400%, 
                800% 800%, 100% 100%;
            animation: futureBackground 40s ease-in-out infinite;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            position: relative;
        }
        
        @keyframes futureBackground {
            0%, 100% { 
                background-position: 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%, 0% 0%;
                filter: hue-rotate(0deg) brightness(0.8) saturate(1.5) contrast(1.2);
            }
            20% { 
                background-position: 25% 25%, 75% 25%, 25% 75%, 75% 75%, 50% 50%, 25% 75%, 0% 0%;
                filter: hue-rotate(72deg) brightness(1.1) saturate(1.8) contrast(1.4);
            }
            40% { 
                background-position: 50% 50%, 50% 50%, 50% 50%, 50% 50%, 100% 100%, 50% 50%, 0% 0%;
                filter: hue-rotate(144deg) brightness(0.9) saturate(2.0) contrast(1.1);
            }
            60% { 
                background-position: 75% 75%, 25% 75%, 75% 25%, 25% 25%, 50% 50%, 75% 25%, 0% 0%;
                filter: hue-rotate(216deg) brightness(1.3) saturate(1.6) contrast(1.5);
            }
            80% { 
                background-position: 100% 100%, 0% 100%, 100% 0%, 0% 0%, 0% 0%, 100% 100%, 0% 0%;
                filter: hue-rotate(288deg) brightness(1.0) saturate(1.9) contrast(1.3);
            }
        }
        
        /* Efectos futuristas flotantes */
        .future-effects {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        
        .future-element {
            position: absolute;
            font-size: 2.8rem;
            animation: elementOrbit 30s linear infinite;
            opacity: 0.4;
        }
        
        .english-element {
            top: 15%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .cybersec-element {
            top: 25%;
            right: 15%;
            animation-delay: 6s;
        }
        
        .aws-element {
            top: 45%;
            left: 5%;
            animation-delay: 12s;
        }
        
        .r15-element {
            top: 65%;
            right: 10%;
            animation-delay: 18s;
        }
        
        .mustang-element {
            top: 80%;
            left: 15%;
            animation-delay: 24s;
        }
        
        .colombia-element {
            top: 35%;
            right: 5%;
            animation-delay: 9s;
        }
        
        @keyframes elementOrbit {
            0% { 
                transform: translateY(0) rotate(0deg) scale(1);
                opacity: 0.4;
                filter: hue-rotate(0deg) drop-shadow(0 0 10px currentColor);
            }
            16.6% { 
                transform: translateY(-50px) rotate(60deg) scale(1.4);
                opacity: 0.7;
                filter: hue-rotate(60deg) drop-shadow(0 0 20px currentColor);
            }
            33.3% { 
                transform: translateY(30px) rotate(120deg) scale(0.8);
                opacity: 0.5;
                filter: hue-rotate(120deg) drop-shadow(0 0 15px currentColor);
            }
            50% { 
                transform: translateY(-35px) rotate(180deg) scale(1.2);
                opacity: 0.8;
                filter: hue-rotate(180deg) drop-shadow(0 0 25px currentColor);
            }
            66.6% { 
                transform: translateY(20px) rotate(240deg) scale(0.9);
                opacity: 0.6;
                filter: hue-rotate(240deg) drop-shadow(0 0 18px currentColor);
            }
            83.3% { 
                transform: translateY(-40px) rotate(300deg) scale(1.1);
                opacity: 0.7;
                filter: hue-rotate(300deg) drop-shadow(0 0 22px currentColor);
            }
            100% { 
                transform: translateY(0) rotate(360deg) scale(1);
                opacity: 0.4;
                filter: hue-rotate(360deg) drop-shadow(0 0 10px currentColor);
            }
        }
        
        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 80px 20px;
            position: relative;
            z-index: 2;
        }
        
        .main-title {
            text-align: center;
            font-family: 'Audiowide', sans-serif;
            font-size: 6rem;
            font-weight: 400;
            background: linear-gradient(45deg, 
                #ff0050, #00ff88, #0099ff, #ff6600, #8800ff, #ff0050);
            background-size: 600% 600%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: futureGradient 7s ease-in-out infinite;
            margin-bottom: 40px;
            text-shadow: 0 0 120px rgba(255, 0, 80, 0.8);
            letter-spacing: 6px;
            position: relative;
            transform: perspective(800px) rotateX(15deg);
        }
        
        .main-title::before {
            content: '';
            position: absolute;
            top: -25px;
            left: -25px;
            right: -25px;
            bottom: -25px;
            background: linear-gradient(45deg, #ff0050, #00ff88, #0099ff, #ff6600, #8800ff);
            z-index: -1;
            border-radius: 30px;
            filter: blur(30px);
            animation: titleAuraFuture 6s ease-in-out infinite alternate;
        }
        
        @keyframes futureGradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        @keyframes titleAuraFuture {
            0% { opacity: 0.6; transform: scale(0.85) rotate(-1deg); }
            100% { opacity: 1; transform: scale(1.15) rotate(1deg); }
        }
        
        .subtitle {
            text-align: center;
            font-family: 'Exo 2', sans-serif;
            font-size: 1.8rem;
            color: #00ff88;
            font-weight: 700;
            margin-bottom: 80px;
            letter-spacing: 4px;
            text-transform: uppercase;
            animation: subtitleFuture 5s ease-in-out infinite;
        }
        
        @keyframes subtitleFuture {
            0%, 100% { 
                opacity: 0.8; 
                text-shadow: 0 0 20px #00ff88; 
                transform: translateY(0) scale(1);
            }
            50% { 
                opacity: 1; 
                text-shadow: 0 0 40px #00ff88, 0 0 60px #0099ff; 
                transform: translateY(-5px) scale(1.02);
            }
        }
        
        .aspirations-timeline {
            position: relative;
            margin: 80px 0;
        }
        
        .timeline-line {
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(to bottom, #ff0050, #00ff88, #0099ff, #ff6600, #8800ff);
            transform: translateX(-50%);
            animation: timelinePulse 4s ease-in-out infinite;
        }
        
        @keyframes timelinePulse {
            0%, 100% { 
                box-shadow: 0 0 10px rgba(255, 0, 80, 0.5);
                filter: brightness(1);
            }
            50% { 
                box-shadow: 0 0 30px rgba(0, 255, 136, 0.8);
                filter: brightness(1.3);
            }
        }
        
        .aspiration-item {
            display: flex;
            align-items: center;
            margin: 60px 0;
            position: relative;
        }
        
        .aspiration-item:nth-child(even) {
            flex-direction: row-reverse;
        }
        
        .aspiration-card {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.18), 
                rgba(255, 255, 255, 0.1));
            backdrop-filter: blur(40px);
            border: 3px solid rgba(255, 0, 80, 0.4);
            border-radius: 35px;
            padding: 50px;
            width: 45%;
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 35px 70px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.25),
                0 0 100px rgba(255, 0, 80, 0.2);
            transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform: perspective(1200px);
        }
        
        .aspiration-item:nth-child(even) .aspiration-card {
            border-color: rgba(0, 255, 136, 0.4);
            box-shadow: 
                0 35px 70px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.25),
                0 0 100px rgba(0, 255, 136, 0.2);
        }
        
        .aspiration-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 0, 80, 0.25), 
                transparent);
            animation: aspirationShimmer 12s linear infinite;
        }
        
        .aspiration-item:nth-child(even) .aspiration-card::before {
            background: linear-gradient(90deg, 
                transparent, 
                rgba(0, 255, 136, 0.25), 
                transparent);
        }
        
        @keyframes aspirationShimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        .aspiration-card:hover {
            transform: perspective(1200px) rotateY(8deg) rotateX(5deg) scale(1.08);
            border-color: rgba(0, 153, 255, 0.7);
            box-shadow: 
                0 50px 100px rgba(0, 0, 0, 0.4),
                0 0 150px rgba(0, 153, 255, 0.4);
        }
        
        .timeline-dot {
            position: absolute;
            left: 50%;
            top: 50%;
            width: 25px;
            height: 25px;
            background: linear-gradient(45deg, #ff0050, #00ff88);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            z-index: 3;
            animation: dotPulse 3s ease-in-out infinite;
            box-shadow: 0 0 20px rgba(255, 0, 80, 0.6);
        }
        
        @keyframes dotPulse {
            0%, 100% { 
                transform: translate(-50%, -50%) scale(1);
                box-shadow: 0 0 20px rgba(255, 0, 80, 0.6);
            }
            50% { 
                transform: translate(-50%, -50%) scale(1.4);
                box-shadow: 0 0 40px rgba(0, 255, 136, 0.8);
            }
        }
        
        .aspiration-icon {
            font-size: 4.5rem;
            text-align: center;
            margin-bottom: 25px;
            display: block;
            animation: iconLevitateAdvanced 7s ease-in-out infinite;
            position: relative;
            z-index: 1;
        }
        
        .aspiration-item:nth-child(2) .aspiration-icon { animation-delay: 1.5s; }
        .aspiration-item:nth-child(3) .aspiration-icon { animation-delay: 3s; }
        .aspiration-item:nth-child(4) .aspiration-icon { animation-delay: 4.5s; }
        .aspiration-item:nth-child(5) .aspiration-icon { animation-delay: 6s; }
        
        @keyframes iconLevitateAdvanced {
            0%, 100% { 
                transform: translateY(0) rotateZ(0deg) scale(1); 
                filter: drop-shadow(0 0 15px currentColor);
            }
            25% { 
                transform: translateY(-20px) rotateZ(5deg) scale(1.1); 
                filter: drop-shadow(0 10px 25px currentColor);
            }
            50% { 
                transform: translateY(-10px) rotateZ(-3deg) scale(0.95); 
                filter: drop-shadow(0 5px 20px currentColor);
            }
            75% { 
                transform: translateY(-25px) rotateZ(7deg) scale(1.05); 
                filter: drop-shadow(0 12px 30px currentColor);
            }
        }
        
        .aspiration-title {
            font-family: 'Orbitron', monospace;
            font-size: 2.2rem;
            font-weight: 700;
            background: linear-gradient(45deg, #ff0050, #0099ff);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 25px;
            text-align: center;
            letter-spacing: 3px;
            position: relative;
            z-index: 1;
        }
        
        .aspiration-item:nth-child(even) .aspiration-title {
            background: linear-gradient(45deg, #00ff88, #8800ff);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .aspiration-content {
            font-size: 1.2rem;
            line-height: 1.9;
            color: rgba(255, 255, 255, 0.9);
            text-align: justify;
            position: relative;
            z-index: 1;
            font-family: 'Exo 2', sans-serif;
        }
        
        .highlight-future {
            background: linear-gradient(120deg, #ff0050, #00ff88, #0099ff);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
            text-shadow: 0 0 25px rgba(255, 0, 80, 0.6);
            position: relative;
        }
        
        .highlight-future::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #ff0050, #00ff88, #0099ff);
            animation: highlightFlowFuture 4s ease-in-out infinite;
        }
        
        @keyframes highlightFlowFuture {
            0%, 100% { 
                opacity: 0.7; 
                transform: scaleX(1); 
                filter: blur(0px);
            }
            50% { 
                opacity: 1; 
                transform: scaleX(1.3); 
                filter: blur(2px);
            }
        }
        
        .ultimate-goal {
            background: linear-gradient(135deg, 
                rgba(255, 0, 80, 0.3), 
                rgba(136, 0, 255, 0.2));
            border: 4px solid rgba(255, 0, 80, 0.6);
            border-radius: 35px;
            padding: 60px;
            margin: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .ultimate-goal::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, 
                rgba(255, 0, 80, 0.15), 
                rgba(136, 0, 255, 0.1));
            animation: ultimateGoalPulse 5s ease-in-out infinite;
        }
        
        @keyframes ultimateGoalPulse {
            0%, 100% { 
                opacity: 0.6; 
                transform: scale(1); 
                filter: hue-rotate(0deg);
            }
            50% { 
                opacity: 1; 
                transform: scale(1.03); 
                filter: hue-rotate(30deg);
            }
        }
        
        .ultimate-title {
            font-family: 'Audiowide', sans-serif;
            font-size: 3.5rem;
            color: #ff0050;
            margin-bottom: 30px;
            text-shadow: 0 0 40px rgba(255, 0, 80, 0.8);
            position: relative;
            z-index: 1;
            animation: ultimateTitleGlow 4s ease-in-out infinite;
        }
        
        @keyframes ultimateTitleGlow {
            0%, 100% { 
                transform: scale(1); 
                filter: drop-shadow(0 0 20px #ff0050);
            }
            50% { 
                transform: scale(1.05); 
                filter: drop-shadow(0 0 50px #ff0050) drop-shadow(0 0 80px #8800ff);
            }
        }
        
        .ultimate-text {
            font-size: 1.6rem;
            color: #fff;
            font-weight: 600;
            position: relative;
            z-index: 1;
            line-height: 1.8;
            font-family: 'Exo 2', sans-serif;
        }
        
        .vision-quote {
            background: linear-gradient(135deg, 
                rgba(0, 153, 255, 0.2), 
                rgba(255, 102, 0, 0.15));
            border: 3px solid rgba(0, 153, 255, 0.5);
            border-radius: 30px;
            padding: 50px;
            margin: 70px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .vision-quote::before {
            content: '"';
            font-size: 12rem;
            color: rgba(0, 153, 255, 0.2);
            position: absolute;
            top: -40px;
            left: 30px;
            font-family: serif;
            z-index: 0;
        }
        
        .vision-quote::after {
            content: '"';
            font-size: 12rem;
            color: rgba(0, 153, 255, 0.2);
            position: absolute;
            bottom: -60px;
            right: 30px;
            font-family: serif;
            z-index: 0;
        }
        
        .quote-text-future {
            font-family: 'Exo 2', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: #0099ff;
            line-height: 1.8;
            position: relative;
            z-index: 1;
            text-shadow: 0 0 20px rgba(0, 153, 255, 0.5);
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .timeline-line { display: none; }
            .aspiration-item { flex-direction: column !important; }
            .aspiration-card { width: 90%; }
            .timeline-dot { position: relative; left: auto; top: auto; transform: none; margin: 20px 0; }
        }
        
        @media (max-width: 768px) {
            .main-title {
                font-size: 4rem;
                letter-spacing: 3px;
            }
            
            .aspiration-card {
                padding: 35px 25px;
                width: 95%;
            }
            
            .ultimate-title {
                font-size: 2.8rem;
            }
        }
        
        @media (max-width: 480px) {
            .main-title {
                font-size: 3rem;
                letter-spacing: 2px;
            }
            
            .aspiration-content {
                font-size: 1.1rem;
            }
            
            .quote-text-future {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <div class="future-effects">
        <div class="future-element english-element">🌍</div>
        <div class="future-element cybersec-element">🛡️</div>
        <div class="future-element aws-element">☁️</div>
        <div class="future-element r15-element">🏍️</div>
        <div class="future-element mustang-element">🚗</div>
        <div class="future-element colombia-element">🇨🇴</div>
    </div>
    
    <div class="container">
        <h1 class="main-title">NARRACIÓN DE MIS ASPIRACIONES</h1>
        <p class="subtitle">El Mapa Hacia Mi Destino</p>
        
        <div class="aspirations-timeline">
            <div class="timeline-line"></div>
            
            <div class="aspiration-item">
                <div class="aspiration-card">
                    <span class="aspiration-icon">🌍</span>
                    <h2 class="aspiration-title">DOMINIO DEL INGLÉS</h2>
                    <div class="aspiration-content">
                        El inglés será mi llave maestra hacia el mundo. No solo hablarlo, sino <span class="highlight-future">dominarlo con fluidez nativa</span>. Cada conversación, cada curso, cada certificación me acerca más a abrir las puertas de las oportunidades globales. Angelo no solo aspira a comunicarse, aspira a <span class="highlight-future">pensar y soñar en inglés</span>, porque el futuro habla en el idioma de las oportunidades internacionales.
                    </div>
                </div>
                <div class="timeline-dot"></div>
            </div>
            
            <div class="aspiration-item">
                <div class="aspiration-card">
                    <span class="aspiration-icon">🛡️</span>
                    <h2 class="aspiration-title">CIBERSEGURIDAD | DATA SCIENCE</h2>
                    <div class="aspiration-content">
                        Entre los datos y la seguridad cibernética, Angelo encontrará su especialización. <span class="highlight-future">Ciberseguridad para proteger el futuro digital</span> o <span class="highlight-future">Data Science para descifrar los secretos de la información</span>. Ambos caminos convergen en una realidad: ser el experto que las empresas globales necesitan para navegar el mundo tecnológico del mañana.
                    </div>
                </div>
                <div class="timeline-dot"></div>
            </div>
            
            <div class="aspiration-item">
                <div class="aspiration-card">
                    <span class="aspiration-icon">☁️</span>
                    <h2 class="aspiration-title">CERTIFICACIONES AWS</h2>
                    <div class="aspiration-content">
                        Las nubes de Amazon serán mi territorio conquistado. <span class="highlight-future">Certificaciones AWS que abran las puertas a empleos remotos internacionales</span>. Cada curso completado será un peldaño más hacia la libertad laboral y financiera. Con AWS en mi arsenal, Angelo podrá trabajar desde cualquier parte del mundo, ganando en dólares mientras vive sus sueños.
                    </div>
                </div>
                <div class="timeline-dot"></div>
            </div>
            
            <div class="aspiration-item">
                <div class="aspiration-card">
                    <span class="aspiration-icon">🏍️</span>
                    <h2 class="aspiration-title">YAMAHA R15 - PRÓXIMOS MESES</h2>
                    <div class="aspiration-content">
                        La R15 deportiva será mi próxima conquista. <span class="highlight-future">Una máquina diseñada para la velocidad y la aventura</span>. Con ella, los caminos hacia Cúcuta se convertirán en experiencias épicas. Visitar a los viejos amigos, abrazar a la familia, recorrer las calles donde crecí, pero ahora sobre una bestia de asfalto que refleje quién me he convertido.
                    </div>
                </div>
                <div class="timeline-dot"></div>
            </div>
        </div>
        
        <div class="ultimate-goal">
            <h3 class="ultimate-title">🚗 LA META MÁXIMA</h3>
            <div class="ultimate-text">
                El <span class="highlight-future">Mustang Convertible Rojo</span> no es solo un auto, es la materialización de todos los sueños hechos realidad. Cuando ese día llegue, cuando las calles de Colombia vean pasar ese rugido americano con Angelo al volante, será la confirmación de que todo esfuerzo, todo sacrificio, toda meta cumplida valió la pena. <span class="highlight-future">El símbolo definitivo de haber llegado a donde siempre soñé estar.</span>
            </div>
        </div>
        
        <div class="vision-quote">
            <div class="quote-text-future">
                Mis aspiraciones no son solo metas, son promesas que me hago a mí mismo. Cada día de preparación, cada curso completado, cada habilidad dominada me acerca al futuro que visualizo: un Angelo exitoso, próspero y libre, viviendo la vida que siempre soñó.
            </div>
        </div>
    </div>

    <script>
        // Efectos interactivos súper avanzados para las aspiraciones
        document.querySelectorAll('.aspiration-card').forEach((card, index) => {
            card.addEventListener('mouseenter', function() {
                this.style.animation = 'cardGlowFuture 1.5s ease-out';
                createAspirationParticles(this, index);
                
                // Efecto de brillantez aumentada
                this.style.filter = 'brightness(1.3) saturate(1.4) contrast(1.2)';
                
                // Crear onda expansiva