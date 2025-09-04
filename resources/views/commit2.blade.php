<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angelo Fabian - Profile Card</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Poppins:wght@300;400;500;600;700;800&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            min-height: 100vh;
            background: 
                radial-gradient(circle at 20% 50%, #ff006e 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, #fb5607 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, #ffbe0b 0%, transparent 50%),
                radial-gradient(circle at 0% 100%, #8338ec 0%, transparent 50%),
                radial-gradient(circle at 80% 100%, #3a86ff 0%, transparent 50%),
                linear-gradient(135deg, #0f0f0f, #1a1a1a, #2d2d2d);
            animation: backgroundPulse 20s ease-in-out infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            position: relative;
        }
        
        @keyframes backgroundPulse {
            0%, 100% { filter: hue-rotate(0deg); }
            25% { filter: hue-rotate(90deg); }
            50% { filter: hue-rotate(180deg); }
            75% { filter: hue-rotate(270deg); }
        }
        
        /* Efectos de fondo */
        .bg-effects {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }
        
        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background: #fff;
            border-radius: 50%;
            animation: twinkle 3s ease-in-out infinite;
        }
        
        .star:nth-child(1) { top: 10%; left: 20%; animation-delay: 0s; }
        .star:nth-child(2) { top: 20%; left: 80%; animation-delay: 0.5s; }
        .star:nth-child(3) { top: 70%; left: 10%; animation-delay: 1s; }
        .star:nth-child(4) { top: 80%; left: 70%; animation-delay: 1.5s; }
        .star:nth-child(5) { top: 30%; left: 50%; animation-delay: 2s; }
        .star:nth-child(6) { top: 60%; left: 30%; animation-delay: 2.5s; }
        
        @keyframes twinkle {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.5); box-shadow: 0 0 10px #fff; }
        }
        
        .main-card {
            background: linear-gradient(145deg, 
                rgba(255, 255, 255, 0.1), 
                rgba(255, 255, 255, 0.05));
            backdrop-filter: blur(30px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            padding: 50px;
            max-width: 600px;
            width: 90%;
            position: relative;
            z-index: 2;
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.2),
                0 0 100px rgba(255, 107, 107, 0.2);
            transform: perspective(1000px);
            transition: all 0.4s ease;
            overflow: hidden;
        }
        
        .main-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 255, 255, 0.1), 
                transparent);
            animation: sweep 4s linear infinite;
        }
        
        @keyframes sweep {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        .main-card:hover {
            transform: perspective(1000px) rotateY(2deg) rotateX(2deg) scale(1.02);
            box-shadow: 
                0 40px 80px rgba(0, 0, 0, 0.4),
                0 0 150px rgba(255, 107, 107, 0.3);
        }
        
        .header-section {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        
        .main-name {
            font-family: 'Orbitron', monospace;
            font-size: 3.5rem;
            font-weight: 900;
            background: linear-gradient(45deg, 
                #ff006e, #fb5607, #ffbe0b, #8338ec, #3a86ff);
            background-size: 300% 300%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: neonFlow 3s ease-in-out infinite;
            margin-bottom: 10px;
            letter-spacing: 3px;
            text-shadow: 0 0 30px rgba(255, 255, 255, 0.5);
        }
        
        @keyframes neonFlow {
            0%, 100% { 
                background-position: 0% 50%; 
                filter: hue-rotate(0deg);
            }
            50% { 
                background-position: 100% 50%; 
                filter: hue-rotate(180deg);
            }
        }
        
        .subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 300;
            letter-spacing: 2px;
            margin-bottom: 30px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            margin-bottom: 30px;
        }
        
        .info-card {
            background: linear-gradient(135deg, 
                rgba(255, 255, 255, 0.1), 
                rgba(255, 255, 255, 0.05));
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, #ff006e, #fb5607, #ffbe0b);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.3);
        }
        
        .info-card:hover::before {
            transform: translateX(0);
        }
        
        .info-label {
            font-size: 0.9rem;
            color: #ff006e;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        
        .info-value {
            font-size: 1.1rem;
            color: #fff;
            font-weight: 500;
            line-height: 1.3;
        }
        
        .parents-section {
            background: linear-gradient(135deg, 
                rgba(255, 107, 107, 0.1), 
                rgba(72, 219, 251, 0.1));
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 25px;
            margin-top: 25px;
        }
        
        .parents-title {
            text-align: center;
            font-size: 1.3rem;
            color: #ffbe0b;
            font-weight: 700;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .parent-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0;
            padding: 15px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .parent-info:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }
        
        .parent-role {
            font-size: 0.9rem;
            color: #8338ec;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .parent-name {
            font-size: 1.1rem;
            color: #fff;
            font-weight: 500;
        }
        
        .age-display {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            background: linear-gradient(45deg, 
                rgba(131, 56, 236, 0.2), 
                rgba(58, 134, 255, 0.2));
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .age-number {
            font-family: 'Orbitron', monospace;
            font-size: 2.5rem;
            font-weight: 700;
            color: #3a86ff;
            text-shadow: 0 0 20px rgba(58, 134, 255, 0.5);
            animation: pulse 2s ease-in-out infinite;
        }
        
        .age-label {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 5px;
            letter-spacing: 1px;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.8; }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .main-card {
                padding: 30px;
                margin: 20px;
            }
            
            .main-name {
                font-size: 2.5rem;
                letter-spacing: 2px;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .parent-info {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
        }
        
        @media (max-width: 480px) {
            .main-name {
                font-size: 2rem;
                letter-spacing: 1px;
            }
            
            .subtitle {
                font-size: 1rem;
            }
            
            .info-card {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="bg-effects">
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
    </div>
    
    <div class="main-card">
        <div class="header-section">
            <h1 class="main-name">ANGELO FABIAN</h1>
            <p class="subtitle">AVILA ALARCON</p>
        </div>
        
        <div class="info-grid">
            <div class="info-card">
                <div class="info-label">Lugar de Nacimiento</div>
                <div class="info-value">Cúcuta, Colombia</div>
            </div>
            
            <div class="info-card">
                <div class="info-label">Fecha de Nacimiento</div>
                <div class="info-value">10 de Mayo, 2006</div>
            </div>
            
            <div class="info-card">
                <div class="info-label">Signo Zodiacal</div>
                <div class="info-value">♉ Tauro</div>
            </div>
            
            <div class="info-card">
                <div class="info-label">Nacionalidad</div>
                <div class="info-value">🇨🇴 Colombiano</div>
            </div>
        </div>
        
        <div class="age-display">
            <div class="age-number" id="age">19</div>
            <div class="age-label">AÑOS DE EDAD</div>
        </div>
        
        <div class="parents-section">
            <h3 class="parents-title">👨‍👩‍👦 Familia</h3>
            
            <div class="parent-info">
                <span class="parent-role">👨 Padre</span>
                <span class="parent-name">Marco Antonio Avila</span>
            </div>
            
            <div class="parent-info">
                <span class="parent-role">👩 Madre</span>
                <span class="parent-name">Angélica Rocío Alarcón</span>
            </div>
        </div>
    </div>

    <script>
        // Calcular edad exacta
        function calculateAge() {
            const birthDate = new Date(2006, 4, 10); // Mayo es mes 4 (0-indexado)
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            
            document.getElementById('age').textContent = age;
        }
        
        calculateAge();
        
        // Efectos de hover dinámicos
        document.querySelectorAll('.info-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) rotateX(5deg)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) rotateX(0deg)';
            });
        });
        
        // Efectos de partículas en clic
        document.addEventListener('click', function(e) {
            for (let i = 0; i < 6; i++) {
                createParticle(e.clientX, e.clientY);
            }
        });
        
        function createParticle(x, y) {
            const particle = document.createElement('div');
            particle.style.cssText = `
                position: fixed;
                width: 4px;
                height: 4px;
                background: radial-gradient(circle, #ff006e, #3a86ff);
                border-radius: 50%;
                pointer-events: none;
                z-index: 1000;
                left: ${x}px;
                top: ${y}px;
                animation: explode 0.8s ease-out forwards;
            `;
            
            const angle = (Math.PI * 2 * i) / 6;
            const velocity = 100;
            const dx = Math.cos(angle) * velocity;
            const dy = Math.sin(angle) * velocity;
            
            particle.style.setProperty('--dx', dx + 'px');
            particle.style.setProperty('--dy', dy + 'px');
            
            document.body.appendChild(particle);
            
            setTimeout(() => {
                if (particle.parentNode) {
                    particle.parentNode.removeChild(particle);
                }
            }, 800);
        }
        
        // CSS para la animación de explosión
        const style = document.createElement('style');
        style.textContent = `
            @keyframes explode {
                0% {
                    transform: translate(0, 0) scale(1);
                    opacity: 1;
                }
                100% {
                    transform: translate(var(--dx), var(--dy)) scale(0);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>