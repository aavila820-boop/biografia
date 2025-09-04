<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angelo - Narración de Mi Niñez</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Orbitron:wght@400;700;900&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            min-height: 100vh;
            background: 
                radial-gradient(circle at 25% 25%, #ff6b35 0%, transparent 50%),
                radial-gradient(circle at 75% 25%, #f7931e 0%, transparent 50%),
                radial-gradient(circle at 25% 75%, #ffd23f 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, #006ba6 0%, transparent 50%),
                linear-gradient(135deg, #0c0c0c 0%, #1a1a2e 50%, #16213e 100%);
            background-size: 400% 400%;
            animation: dreamyBackground 25s ease-in-out infinite;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            position: relative;
        }
        
        @keyframes dreamyBackground {
            0%, 100% { 
                background-position: 0% 50%; 
                filter: hue-rotate(0deg) brightness(0.9);
            }
            25% { 
                background-position: 25% 25%; 
                filter: hue-rotate(90deg) brightness(1.1);
            }
            50% { 
                background-position: 100% 50%; 
                filter: hue-rotate(180deg) brightness(0.8);
            }
            75% { 
                background-position: 75% 75%; 
                filter: hue-rotate(270deg) brightness(1.2);
            }
        }
        
        /* Efectos de fondo animados */
        .floating-elements {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        
        .soccer-ball, .game-controller, .colombia-heart {
            position: absolute;
            animation: float 15s ease-in-out infinite;
            opacity: 0.3;
        }
        
        .soccer-ball {
            font-size: 2rem;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .game-controller {
            font-size: 1.8rem;
            top: 70%;
            right: 15%;
            animation-delay: 5s;
        }
        
        .colombia-heart {
            font-size: 1.5rem;
            top: 50%;
            left: 85%;
            animation-delay: 10s;
        }
        
        @keyframes float {
            0%, 100% { 
                transform: translateY(0) rotate(0deg) scale(1);
                opacity: 0.3;
            }
            33% { 
                transform: translateY(-20px) rotate(120deg) scale(1.2);
                opacity: 0.6;
            }
            66% { 
                transform: translateY(10px) rotate(240deg) scale(0.8);
                opacity: 0.4;
            }
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 50px 20px;
            position: relative;
            z-index: 2;
        }
        
        .main-title {
            text-align: center;
            font-family: 'Cinzel', serif;
            font-size: 4rem;
            font-weight: 700;
            background: linear-gradient(45deg, 
                #ffd700, #ffb347, #ff6b35, #f7931e, #ffd23f);
            background-size: 300% 300%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: goldShimmer 4s ease-in-out infinite;
            margin-bottom: 20px;
            text-shadow: 0 0 50px rgba(255, 215, 0, 0.5);
            letter-spacing: 3px;
            position: relative;
        }
        
        .main-title::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient(45deg, #ffd700, transparent, #ffd700);
            z-index: -1;
            border-radius: 15px;
            filter: blur(15px);
            animation: titleGlow 3s ease-in-out infinite alternate;
        }
        
        @keyframes goldShimmer {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        @keyframes titleGlow {
            0% { opacity: 0.3; transform: scale(0.98); }
            100% { opacity: 0.7; transform: scale(1.02); }
        }
        
        .subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: #ffd700;
            font-weight: 500;
            margin-bottom: 50px;
            letter-spacing: 2px;
            animation: subtitlePulse 2s ease-in-out infinite;
        }
        
        @keyframes subtitlePulse {
            0%, 100% { opacity: 0.8; }
            50% { opacity: 1; text-shadow: 0 0 20px #ffd700; }
        }
        
        .story-container {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.1), 
                rgba(255, 255, 255, 0.05));
            backdrop-filter: blur(25px);
            border: 2px solid rgba(255, 215, 0, 0.3);
            border-radius: 30px;
            padding: 60px;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.2),
                0 0 80px rgba(255, 215, 0, 0.2);
            transition: all 0.4s ease;
        }
        
        .story-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 215, 0, 0.1), 
                transparent);
            animation: storyShimmer 6s linear infinite;
        }
        
        @keyframes storyShimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        .story-container:hover {
            transform: scale(1.02);
            box-shadow: 
                0 40px 80px rgba(0, 0, 0, 0.4),
                0 0 120px rgba(255, 215, 0, 0.3);
            border-color: rgba(255, 215, 0, 0.5);
        }
        
        .story-paragraph {
            font-size: 1.2rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 25px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            border-left: 4px solid #ffd700;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }
        
        .story-paragraph:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(10px);
            border-left-color: #ff6b35;
            color: #fff;
        }
        
        .highlight {
            background: linear-gradient(120deg, #ffd700, #ff6b35);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 600;
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.3);
        }
        
        .memory-icons {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 40px 0;
            flex-wrap: wrap;
        }
        
        .memory-icon {
            background: linear-gradient(135deg, 
                rgba(255, 215, 0, 0.2), 
                rgba(255, 107, 53, 0.2));
            border: 2px solid rgba(255, 215, 0, 0.3);
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            transition: all 0.4s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        
        .memory-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, 
                rgba(255, 215, 0, 0.1), 
                rgba(255, 107, 53, 0.1));
            transform: scale(0);
            border-radius: 50%;
            transition: transform 0.4s ease;
            z-index: 0;
        }
        
        .memory-icon:hover::before {
            transform: scale(2);
        }
        
        .memory-icon:hover {
            transform: translateY(-15px) rotateY(10deg);
            border-color: #ffd700;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.3),
                0 0 30px rgba(255, 215, 0, 0.4);
        }
        
        .memory-icon-emoji {
            font-size: 3rem;
            margin-bottom: 15px;
            display: block;
            position: relative;
            z-index: 1;
            animation: iconBounce 3s ease-in-out infinite;
        }
        
        .memory-icon:nth-child(2) .memory-icon-emoji { animation-delay: 0.5s; }
        .memory-icon:nth-child(3) .memory-icon-emoji { animation-delay: 1s; }
        .memory-icon:nth-child(4) .memory-icon-emoji { animation-delay: 1.5s; }
        
        @keyframes iconBounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        
        .memory-icon-text {
            font-size: 0.9rem;
            color: #ffd700;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            z-index: 1;
        }
        
        .final-quote {
            text-align: center;
            font-family: 'Cinzel', serif;
            font-size: 1.4rem;
            font-style: italic;
            color: #ffd700;
            margin-top: 40px;
            padding: 30px;
            background: linear-gradient(135deg, 
                rgba(0, 107, 166, 0.2), 
                rgba(255, 215, 0, 0.1));
            border-radius: 20px;
            border: 1px solid rgba(255, 215, 0, 0.3);
            position: relative;
        }
        
        .final-quote::before, .final-quote::after {
            content: '"';
            font-size: 4rem;
            color: rgba(255, 215, 0, 0.3);
            position: absolute;
            font-family: serif;
        }
        
        .final-quote::before {
            top: 10px;
            left: 20px;
        }
        
        .final-quote::after {
            bottom: 10px;
            right: 20px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .main-title {
                font-size: 2.8rem;
                letter-spacing: 2px;
            }
            
            .story-container {
                padding: 40px 25px;
                margin: 20px;
            }
            
            .memory-icons {
                gap: 20px;
            }
            
            .memory-icon {
                padding: 20px;
            }
            
            .memory-icon-emoji {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 480px) {
            .main-title {
                font-size: 2.2rem;
                letter-spacing: 1px;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .story-paragraph {
                font-size: 1.1rem;
                padding: 15px;
            }
            
            .final-quote {
                font-size: 1.2rem;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="floating-elements">
        <div class="soccer-ball">⚽</div>
        <div class="game-controller">🎮</div>
        <div class="colombia-heart">🇨🇴</div>
    </div>
    
    <div class="container">
        <h1 class="main-title">NARRACIÓN DE MI NIÑEZ</h1>
        <p class="subtitle">Los Recuerdos Dorados de Angelo</p>
        
        <div class="story-container">
            <div class="story-paragraph">
                En las calles polvorientas y llenas de vida de <span class="highlight">Cúcuta</span>, un pequeño Angelo corría descalzo tras un balón desgastado, con la camiseta amarilla de <span class="highlight">Colombia</span> ondeando al viento. Cada tarde después del colegio, el patio se convertía en el estadio más importante del mundo, donde los gritos de "¡Gol!" resonaban con la misma emoción que en el Metropolitano.
            </div>
            
            <div class="story-paragraph">
                Pero cuando el sol se escondía tras las montañas cucuteñas, Angelo se refugiaba en su cuarto para vivir otra aventura épica. Con el control en sus pequeñas manos, se transformaba en el <span class="highlight">Master Chief</span>, salvando la galaxia en Halo mientras sus papás, Marco Antonio y Angélica Rocío, sonreían al escuchar sus emocionados gritos de victoria desde la sala.
            </div>
            
            <div class="story-paragraph">
                En el colegio, rodeado de sus <span class="highlight">parceros de toda la vida</span>, Angelo era el narrador oficial de las hazañas futbolísticas de James Rodríguez y el estratega número uno en los recreos gaming. Sus amigos sabían que si querían saber sobre el último partido de la Selección o el truco más difícil de Halo, Angelo era el experto indiscutible.
            </div>
            
            <div class="story-paragraph">
                Los fines de semana eran sagrados: por las mañanas, el fútbol callejero con los vecinos hasta que las mamás gritaran para almorzar, y por las tardes, maratones épicas de videojuegos que duraban hasta que los ojos ya no aguantaran más. Cada gol marcado en la calle y cada misión completada en la pantalla se grababa en su corazón como los tesoros más preciados.
            </div>
        </div>
        
        <div class="memory-icons">
            <div class="memory-icon">
                <span class="memory-icon-emoji">⚽</span>
                <div class="memory-icon-text">Fútbol Callejero</div>
            </div>
            <div class="memory-icon">
                <span class="memory-icon-emoji">🎮</span>
                <div class="memory-icon-text">Halo Legendary</div>
            </div>
            <div class="memory-icon">
                <span class="memory-icon-emoji">🇨🇴</span>
                <div class="memory-icon-text">Amor Tricolor</div>
            </div>
            <div class="memory-icon">
                <span class="memory-icon-emoji">👬</span>
                <div class="memory-icon-text">Parceros de Vida</div>
            </div>
        </div>
        
        <div class="final-quote">
            Esos días dorados en Cúcuta forjaron al Angelo de hoy: un guerrero en el campo, un estratega en los videojuegos, y un corazón que late amarillo, azul y rojo por siempre.
        </div>
    </div>

    <script>
        // Efectos interactivos
        document.querySelectorAll('.story-paragraph').forEach((paragraph, index) => {
            paragraph.addEventListener('mouseenter', function() {
                this.style.animation = `paragraphGlow 0.5s ease-out`;
                setTimeout(() => {
                    this.style.animation = '';
                }, 500);
            });
        });
        
        // Efectos de clic en iconos
        document.querySelectorAll('.memory-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                this.style.animation = 'iconExplode 0.6s ease-out';
                
                // Crear partículas
                for (let i = 0; i < 8; i++) {
                    createMemoryParticle(this);
                }
                
                setTimeout(() => {
                    this.style.animation = '';
                }, 600);
            });
        });
        
        function createMemoryParticle(element) {
            const particle = document.createElement('div');
            const rect = element.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            
            particle.style.cssText = `
                position: fixed;
                width: 6px;
                height: 6px;
                background: linear-gradient(45deg, #ffd700, #ff6b35);
                border-radius: 50%;
                pointer-events: none;
                z-index: 1000;
                left: ${centerX}px;
                top: ${centerY}px;
                box-shadow: 0 0 10px #ffd700;
            `;
            
            const angle = (Math.PI * 2 * Math.random());
            const velocity = 50 + Math.random() * 50;
            const dx = Math.cos(angle) * velocity;
            const dy = Math.sin(angle) * velocity;
            
            document.body.appendChild(particle);
            
            particle.animate([
                { transform: 'translate(0, 0) scale(1)', opacity: 1 },
                { transform: `translate(${dx}px, ${dy}px) scale(0)`, opacity: 0 }
            ], {
                duration: 1000,
                easing: 'ease-out'
            }).onfinish = () => {
                if (particle.parentNode) {
                    particle.parentNode.removeChild(particle);
                }
            };
        }
        
        // Animación CSS adicional
        const additionalStyles = document.createElement('style');
        additionalStyles.textContent = `
            @keyframes paragraphGlow {
                0% { box-shadow: 0 0 5px rgba(255, 215, 0, 0.3); }
                50% { box-shadow: 0 0 20px rgba(255, 215, 0, 0.6), 0 0 30px rgba(255, 107, 53, 0.4); }
                100% { box-shadow: 0 0 5px rgba(255, 215, 0, 0.3); }
            }
            
            @keyframes iconExplode {
                0% { transform: translateY(-15px) rotateY(10deg) scale(1); }
                50% { transform: translateY(-25px) rotateY(180deg) scale(1.2); }
                100% { transform: translateY(-15px) rotateY(360deg) scale(1); }
            }
        `;
        document.head.appendChild(additionalStyles);
        
        // Scroll smooth effects
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const floating = document.querySelector('.floating-elements');
            if (floating) {
                floating.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
    </script>
</body>
</html>