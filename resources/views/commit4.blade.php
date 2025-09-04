<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angelo - Narración de Mi Adolescencia</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800&family=Orbitron:wght@400;700;900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            min-height: 100vh;
            background: 
                radial-gradient(circle at 20% 20%, #8b5cf6 0%, transparent 40%),
                radial-gradient(circle at 80% 20%, #06b6d4 0%, transparent 40%),
                radial-gradient(circle at 20% 80%, #10b981 0%, transparent 40%),
                radial-gradient(circle at 80% 80%, #f59e0b 0%, transparent 40%),
                radial-gradient(circle at 50% 50%, #ef4444 0%, transparent 30%),
                linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 30%, #16213e 60%, #0f3460 100%);
            background-size: 600% 600%;
            animation: epicBackground 30s ease-in-out infinite;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            position: relative;
        }
        
        @keyframes epicBackground {
            0%, 100% { 
                background-position: 0% 0%; 
                filter: hue-rotate(0deg) brightness(0.9) contrast(1.1);
            }
            20% { 
                background-position: 25% 25%; 
                filter: hue-rotate(72deg) brightness(1.2) contrast(1.3);
            }
            40% { 
                background-position: 50% 50%; 
                filter: hue-rotate(144deg) brightness(0.8) contrast(1.2);
            }
            60% { 
                background-position: 75% 75%; 
                filter: hue-rotate(216deg) brightness(1.1) contrast(1.4);
            }
            80% { 
                background-position: 100% 100%; 
                filter: hue-rotate(288deg) brightness(1.3) contrast(1.1);
            }
        }
        
        /* Efectos de fondo gaming */
        .gaming-effects {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        
        .floating-icon {
            position: absolute;
            font-size: 2rem;
            animation: floatGaming 20s linear infinite;
            opacity: 0.2;
        }
        
        .fortnite-icon {
            top: 15%;
            left: 5%;
            animation-delay: 0s;
        }
        
        .gym-icon {
            top: 25%;
            right: 10%;
            animation-delay: 7s;
        }
        
        .trophy-icon {
            top: 60%;
            left: 8%;
            animation-delay: 14s;
        }
        
        .dumbbell-icon {
            top: 70%;
            right: 5%;
            animation-delay: 3s;
        }
        
        .colombia-flag {
            top: 40%;
            left: 90%;
            animation-delay: 10s;
        }
        
        @keyframes floatGaming {
            0% { 
                transform: translateY(0) rotate(0deg) scale(1);
                opacity: 0.2;
            }
            25% { 
                transform: translateY(-30px) rotate(90deg) scale(1.3);
                opacity: 0.5;
            }
            50% { 
                transform: translateY(20px) rotate(180deg) scale(0.8);
                opacity: 0.3;
            }
            75% { 
                transform: translateY(-15px) rotate(270deg) scale(1.1);
                opacity: 0.6;
            }
            100% { 
                transform: translateY(0) rotate(360deg) scale(1);
                opacity: 0.2;
            }
        }
        
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 60px 20px;
            position: relative;
            z-index: 2;
        }
        
        .main-title {
            text-align: center;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 5rem;
            font-weight: 400;
            background: linear-gradient(45deg, 
                #8b5cf6, #06b6d4, #10b981, #f59e0b, #ef4444, #8b5cf6);
            background-size: 400% 400%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: epicGradient 5s ease-in-out infinite;
            margin-bottom: 25px;
            text-shadow: 0 0 80px rgba(139, 92, 246, 0.6);
            letter-spacing: 4px;
            position: relative;
        }
        
        .main-title::before {
            content: '';
            position: absolute;
            top: -15px;
            left: -15px;
            right: -15px;
            bottom: -15px;
            background: linear-gradient(45deg, #8b5cf6, #06b6d4, #10b981, #f59e0b);
            z-index: -1;
            border-radius: 20px;
            filter: blur(20px);
            animation: titleAura 4s ease-in-out infinite alternate;
        }
        
        @keyframes epicGradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        @keyframes titleAura {
            0% { opacity: 0.4; transform: scale(0.95); }
            100% { opacity: 0.8; transform: scale(1.05); }
        }
        
        .subtitle {
            text-align: center;
            font-size: 1.4rem;
            color: #10b981;
            font-weight: 600;
            margin-bottom: 60px;
            letter-spacing: 2px;
            animation: subtitleGlow 3s ease-in-out infinite;
        }
        
        @keyframes subtitleGlow {
            0%, 100% { 
                opacity: 0.8; 
                text-shadow: 0 0 10px #10b981; 
            }
            50% { 
                opacity: 1; 
                text-shadow: 0 0 25px #10b981, 0 0 40px #06b6d4; 
            }
        }
        
        .chapter {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.12), 
                rgba(255, 255, 255, 0.06));
            backdrop-filter: blur(30px);
            border: 2px solid rgba(139, 92, 246, 0.4);
            border-radius: 25px;
            padding: 50px;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.15),
                0 0 60px rgba(139, 92, 246, 0.2);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .chapter::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(139, 92, 246, 0.15), 
                transparent);
            animation: chapterShimmer 8s linear infinite;
        }
        
        @keyframes chapterShimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        .chapter:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: rgba(16, 185, 129, 0.6);
            box-shadow: 
                0 35px 70px rgba(0, 0, 0, 0.4),
                0 0 100px rgba(16, 185, 129, 0.3);
        }
        
        .chapter-title {
            font-family: 'Orbitron', monospace;
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(45deg, #8b5cf6, #06b6d4);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 25px;
            text-align: center;
            letter-spacing: 2px;
            position: relative;
            z-index: 1;
        }
        
        .chapter-content {
            font-size: 1.2rem;
            line-height: 1.9;
            color: rgba(255, 255, 255, 0.9);
            position: relative;
            z-index: 1;
            text-align: justify;
        }
        
        .highlight {
            background: linear-gradient(120deg, #f59e0b, #ef4444, #8b5cf6);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
            text-shadow: 0 0 15px rgba(245, 158, 11, 0.4);
            position: relative;
        }
        
        .highlight::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #f59e0b, #ef4444, #8b5cf6);
            animation: highlightPulse 2s ease-in-out infinite;
        }
        
        @keyframes highlightPulse {
            0%, 100% { opacity: 0.5; transform: scaleX(1); }
            50% { opacity: 1; transform: scaleX(1.1); }
        }
        
        .achievement-moment {
            background: linear-gradient(135deg, 
                rgba(245, 158, 11, 0.2), 
                rgba(16, 185, 129, 0.2));
            border: 3px solid rgba(245, 158, 11, 0.5);
            border-radius: 20px;
            padding: 40px;
            margin: 30px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .achievement-moment::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, 
                rgba(245, 158, 11, 0.1), 
                rgba(16, 185, 129, 0.1));
            animation: achievementGlow 3s ease-in-out infinite;
        }
        
        @keyframes achievementGlow {
            0%, 100% { opacity: 0.5; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.02); }
        }
        
        .achievement-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            color: #f59e0b;
            margin-bottom: 20px;
            text-shadow: 0 0 20px rgba(245, 158, 11, 0.6);
            position: relative;
            z-index: 1;
        }
        
        .achievement-text {
            font-size: 1.3rem;
            color: #fff;
            font-weight: 600;
            position: relative;
            z-index: 1;
            line-height: 1.6;
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }
        
        .stat-card {
            background: linear-gradient(135deg, 
                rgba(6, 182, 212, 0.2), 
                rgba(139, 92, 246, 0.2));
            border: 2px solid rgba(6, 182, 212, 0.4);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            transition: all 0.4s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, 
                rgba(6, 182, 212, 0.1), 
                rgba(139, 92, 246, 0.1));
            transform: scale(0);
            border-radius: 50%;
            transition: transform 0.5s ease;
        }
        
        .stat-card:hover::before {
            transform: scale(2.5);
        }
        
        .stat-card:hover {
            transform: translateY(-15px) rotateY(5deg);
            border-color: #06b6d4;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.3),
                0 0 50px rgba(6, 182, 212, 0.4);
        }
        
        .stat-icon {
            font-size: 3.5rem;
            margin-bottom: 20px;
            display: block;
            animation: statIconFloat 4s ease-in-out infinite;
            position: relative;
            z-index: 1;
        }
        
        .stat-card:nth-child(2) .stat-icon { animation-delay: 1s; }
        .stat-card:nth-child(3) .stat-icon { animation-delay: 2s; }
        
        @keyframes statIconFloat {
            0%, 100% { transform: translateY(0) rotateZ(0deg); }
            50% { transform: translateY(-10px) rotateZ(5deg); }
        }
        
        .stat-value {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            color: #06b6d4;
            margin-bottom: 10px;
            text-shadow: 0 0 15px rgba(6, 182, 212, 0.5);
            position: relative;
            z-index: 1;
        }
        
        .stat-label {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            position: relative;
            z-index: 1;
        }
        
        .emotional-quote {
            background: linear-gradient(135deg, 
                rgba(239, 68, 68, 0.15), 
                rgba(139, 92, 246, 0.15));
            border: 2px solid rgba(239, 68, 68, 0.4);
            border-radius: 25px;
            padding: 40px;
            margin: 50px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .emotional-quote::before {
            content: '"';
            font-size: 8rem;
            color: rgba(239, 68, 68, 0.2);
            position: absolute;
            top: -20px;
            left: 20px;
            font-family: serif;
            z-index: 0;
        }
        
        .emotional-quote::after {
            content: '"';
            font-size: 8rem;
            color: rgba(239, 68, 68, 0.2);
            position: absolute;
            bottom: -40px;
            right: 20px;
            font-family: serif;
            z-index: 0;
        }
        
        .quote-text {
            font-family: 'Cinzel', serif;
            font-size: 1.5rem;
            font-style: italic;
            color: #ef4444;
            font-weight: 600;
            line-height: 1.7;
            position: relative;
            z-index: 1;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .main-title {
                font-size: 3.5rem;
                letter-spacing: 2px;
            }
            
            .chapter {
                padding: 30px 20px;
                margin: 20px 10px;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .achievement-title {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .main-title {
                font-size: 2.8rem;
                letter-spacing: 1px;
            }
            
            .chapter-content {
                font-size: 1.1rem;
            }
            
            .quote-text {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <div class="gaming-effects">
        <div class="floating-icon fortnite-icon">🎮</div>
        <div class="floating-icon gym-icon">💪</div>
        <div class="floating-icon trophy-icon">🏆</div>
        <div class="floating-icon dumbbell-icon">🏋️‍♂️</div>
        <div class="floating-icon colombia-flag">🇨🇴</div>
    </div>
    
    <div class="container">
        <h1 class="main-title">NARRACIÓN DE MI ADOLESCENCIA</h1>
        <p class="subtitle">El Despertar del Guerrero</p>
        
        <div class="chapter">
            <h2 class="chapter-title">🎮 LA ERA FORTNITE</h2>
            <div class="chapter-content">
                Los días se convertían en noches y las noches en madrugadas frente a la pantalla. <span class="highlight">Fortnite</span> no era solo un juego, era mi mundo, mi pasión, mi obsesión. En una Colombia donde el ping alto era el enemigo número uno, Angelo se las ingenió para competir contra el mundo entero. Cada partida era una batalla épica, cada eliminación una pequeña victoria contra las probabilidades.
                <br><br>
                Las manos temblaban, el corazón latía a mil por hora, y los gritos de emoción resonaban por toda la casa. Mis papás ya sabían que cuando escucharan esos gritos, Angelo estaba viviendo su momento. <span class="highlight">Battle Royale</span> tras Battle Royale, construyendo torres al cielo y droppeando como un profesional en los lugares más peligrosos del mapa.
            </div>
        </div>
        
        <div class="achievement-moment">
            <h3 class="achievement-title">💰 EL MOMENTO DORADO</h3>
            <div class="achievement-text">
                <span class="highlight">22 de Noviembre de 2024</span> - Una fecha que jamás olvidaré. Después de miles de partidas, de noches sin dormir, de creer y no creer, finalmente llegó: <span class="highlight">MIS PRIMEROS EARNINGS EN FORTNITE</span>. $100 dólares que valían más que cualquier tesoro. No eran solo billetes, era la materialización de un sueño de niño que se hizo realidad en mi adolescencia.
                <br><br>
                Las lágrimas de felicidad corrían por mis mejillas mientras mi amigo gritaba de emoción a mi lado. Los gritos fueron tan fuertes que despertamos a Marco Antonio y Angélica, quienes corrieron a ver qué pasaba. "¡Papás, lo logré! ¡Gané dinero jugando!" - esas palabras salieron de mi alma.
            </div>
        </div>
        
        <div class="chapter">
            <h2 class="chapter-title">💪 LA TRANSFORMACIÓN DEL HIERRO</h2>
            <div class="chapter-content">
                El gimnasio se convirtió en mi segundo hogar, mi templo de superación. Llegué siendo un flaco que <span class="highlight">ni siquiera podía levantar la barra</span> en press de banca. Las primeras semanas fueron humillantes, frustrantes, pero algo dentro de mí no me dejaba rendirme.
                <br><br>
                Día tras día, repetición tras repetición, kilo tras kilo. Mi cuerpo se transformaba, pero más importante aún, <span class="highlight">mi mente se fortalecía</span>. Cada peso añadido era una lección de vida, cada serie completada era una pequeña victoria sobre mis límites. El gimnasio no solo cambió mi físico, cambió mi manera de ver la vida, me dio la motivación que necesitaba para todo.
            </div>
        </div>
        
        <div class="stats-container">
            <div class="stat-card">
                <span class="stat-icon">🎯</span>
                <div class="stat-value">$100</div>
                <div class="stat-label">Primeros Earnings</div>
            </div>
            <div class="stat-card">
                <span class="stat-icon">💪</span>
                <div class="stat-value">80kg</div>
                <div class="stat-label">Press Banca Máximo</div>
            </div>
            <div class="stat-card">
                <span class="stat-icon">🔥</span>
                <div class="stat-value">9 REPS</div>
                <div class="stat-label">Como Si Fueran Pluma</div>
            </div>
        </div>
        
        <div class="chapter">
            <h2 class="chapter-title">🏆 EL DESPERTAR DEL CAMPEÓN</h2>
            <div class="chapter-content">
                La adolescencia me enseñó que los sueños no tienen fronteras geográficas ni limitaciones técnicas. <span class="highlight">Competir desde Colombia</span> con ping alto contra jugadores de todo el mundo y ganar dinero fue demostrarme a mí mismo que todo es posible cuando tienes pasión y dedicación.
                <br><br>
                Del gymnasium surgió una nueva versión de Angelo: más fuerte, más disciplinado, más confiado. <span class="highlight">De no poder levantar la barra a mover 80 kilos como plumas</span> - esa transformación física se convirtió en transformación mental. Cada músculo que crecía era autoestima que se fortalecía, cada peso que dominaba era un límite que destruía.
            </div>
        </div>
        
        <div class="emotional-quote">
            <div class="quote-text">
                Mi adolescencia no fue solo crecer en edad, fue descubrir que dentro de mí habitaba un guerrero. Entre las batallas digitales de Fortnite y las batallas reales del gimnasio, Angelo se forjó como el hombre que soy hoy: uno que nunca se rinde y que convierte los sueños en realidad.
            </div>
        </div>
    </div>

    <script>
        // Efectos interactivos épicos
        document.querySelectorAll('.chapter').forEach((chapter, index) => {
            chapter.addEventListener('mouseenter', function() {
                this.style.animation = 'chapterGlow 0.8s ease-out';
                createChapterParticles(this);
            });
            
            chapter.addEventListener('mouseleave', function() {
                this.style.animation = '';
            });
        });
        
        // Efectos especiales en las tarjetas de estadísticas
        document.querySelectorAll('.stat-card').forEach(card => {
            card.addEventListener('click', function() {
                this.style.animation = 'statExplode 1s cubic-bezier(0.68, -0.55, 0.265, 1.55)';
                
                // Crear explosión de partículas doradas
                for (let i = 0; i < 12; i++) {
                    createGoldenParticle(this);
                }
                
                // Sonido mental de logro
                this.style.transform = 'translateY(-20px) rotateY(10deg) scale(1.1)';
                
                setTimeout(() => {
                    this.style.animation = '';
                    this.style.transform = '';
                }, 1000);
            });
        });
        
        function createChapterParticles(element) {
            for (let i = 0; i < 6; i++) {
                const particle = document.createElement('div');
                const rect = element.getBoundingClientRect();
                
                particle.style.cssText = `
                    position: fixed;
                    width: 8px;
                    height: 8px;
                    background: linear-gradient(45deg, #8b5cf6, #06b6d4);
                    border-radius: 50%;
                    pointer-events: none;
                    z-index: 1000;
                    left: ${rect.left + Math.random() * rect.width}px;
                    top: ${rect.top + Math.random() * rect.height}px;
                    box-shadow: 0 0 15px #8b5cf6;
                `;
                
                document.body.appendChild(particle);
                
                particle.animate([
                    { 
                        transform: 'scale(1) translateY(0)', 
                        opacity: 1,
                        filter: 'hue-rotate(0deg)'
                    },
                    { 
                        transform: 'scale(0) translateY(-50px)', 
                        opacity: 0,
                        filter: 'hue-rotate(180deg)'
                    }
                ], {
                    duration: 1500,
                    easing: 'ease-out'
                }).onfinish = () => {
                    if (particle.parentNode) {
                        particle.parentNode.removeChild(particle);
                    }
                };
            }
        }
        
        function createGoldenParticle(element) {
            const particle = document.createElement('div');
            const rect = element.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            
            particle.style.cssText = `
                position: fixed;
                width: 10px;
                height: 10px;
                background: linear-gradient(45deg, #f59e0b, #ef4444);
                border-radius: 50%;
                pointer-events: none;
                z-index: 1000;
                left: ${centerX}px;
                top: ${centerY}px;
                box-shadow: 
                    0 0 20px #f59e0b,
                    0 0 40px #ef4444,
                    0 0 60px #8b5cf6;
            `;
            
            const angle = (Math.PI * 2 * Math.random());
            const velocity = 80 + Math.random() * 40;
            const dx = Math.cos(angle) * velocity;
            const dy = Math.sin(angle) * velocity - 50; // Un poco hacia arriba
            
            document.body.appendChild(particle);
            
            particle.animate([
                { 
                    transform: 'translate(0, 0) scale(1) rotate(0deg)', 
                    opacity: 1 
                },
                { 
                    transform: `translate(${dx}px, ${dy}px) scale(0) rotate(720deg)`, 
                    opacity: 0 
                }
            ], {
                duration: 1500,
                easing: 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
            }).onfinish = () => {
                if (particle.parentNode) {
                    particle.parentNode.removeChild(particle);
                }
            };
        }
        
        // Momento especial para el achievement
        const achievementMoment = document.querySelector('.achievement-moment');
        achievementMoment.addEventListener('click', function() {
            // Lluvia de trofeos
            for (let i = 0; i < 20; i++) {
                setTimeout(() => {
                    createTrophyRain();
                }, i * 100);
            }
        });
        
        function createTrophyRain() {
            const trophy = document.createElement('div');
            trophy.textContent = ['🏆', '💰', '⭐', '🔥', '💎'][Math.floor(Math.random() * 5)];
            trophy.style.cssText = `
                position: fixed;
                font-size: 2rem;
                left: ${Math.random() * window.innerWidth}px;
                top: -50px;
                pointer-events: none;
                z-index: 1000;
                animation: trophyFall 3s linear forwards;
            `;
            
            document.body.appendChild(trophy);
            
            setTimeout(() => {
                if (trophy.parent