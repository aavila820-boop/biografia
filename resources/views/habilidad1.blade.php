<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maestro en Ventas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #f5576c 75%, #4facfe 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .money-rain {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .dollar {
            position: absolute;
            color: rgba(255, 215, 0, 0.7);
            font-size: 2rem;
            animation: fall linear infinite;
            user-select: none;
        }

        @keyframes fall {
            0% {
                transform: translateY(-100px) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }

        .skill-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(30px);
            border-radius: 40px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 60px;
            max-width: 800px;
            width: 100%;
            box-shadow: 
                0 50px 100px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 3;
            animation: containerPulse 4s ease-in-out infinite;
        }

        @keyframes containerPulse {
            0%, 100% { 
                box-shadow: 
                    0 50px 100px rgba(0, 0, 0, 0.3),
                    inset 0 1px 0 rgba(255, 255, 255, 0.2),
                    0 0 0 0 rgba(255, 215, 0, 0);
            }
            50% { 
                box-shadow: 
                    0 50px 100px rgba(0, 0, 0, 0.3),
                    inset 0 1px 0 rgba(255, 255, 255, 0.2),
                    0 0 0 20px rgba(255, 215, 0, 0.3);
            }
        }

        .skill-header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .skill-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            display: inline-block;
            animation: iconRotate 3s ease-in-out infinite;
            filter: drop-shadow(0 0 30px rgba(255, 215, 0, 0.8));
        }

        @keyframes iconRotate {
            0%, 100% { transform: rotate(0deg) scale(1); }
            25% { transform: rotate(-10deg) scale(1.1); }
            75% { transform: rotate(10deg) scale(1.1); }
        }

        .skill-title {
            color: #fff;
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 15px;
            text-shadow: 0 0 40px rgba(255, 215, 0, 0.6);
            background: linear-gradient(45deg, #ffd700, #ffed4e, #fff, #ffd700);
            background-size: 400% 400%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: titleShine 3s ease-in-out infinite;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        @keyframes titleShine {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .skill-subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.3rem;
            font-weight: 600;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 30px;
        }

        .sales-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }

        .stat-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.1));
            border-radius: 25px;
            padding: 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(20px);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }

        .stat-card:hover {
            transform: translateY(-15px) scale(1.05);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .stat-card:hover::before {
            left: 100%;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            color: #ffd700;
            margin-bottom: 10px;
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.8);
            animation: numberGlow 2s ease-in-out infinite alternate;
        }

        @keyframes numberGlow {
            from { text-shadow: 0 0 20px rgba(255, 215, 0, 0.8); }
            to { text-shadow: 0 0 30px rgba(255, 215, 0, 1), 0 0 40px rgba(255, 215, 0, 0.6); }
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .sales-description {
            background: linear-gradient(145deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.1));
            border-radius: 30px;
            padding: 40px;
            margin: 40px 0;
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .sales-description::before {
            content: '💰';
            position: absolute;
            top: -15px;
            left: 30px;
            font-size: 2rem;
            background: linear-gradient(135deg, #ffd700, #ff8c00);
            padding: 10px 15px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(255, 215, 0, 0.4);
        }

        .sales-description h3 {
            color: #ffd700;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            margin-left: 30px;
            text-shadow: 0 2px 10px rgba(255, 215, 0, 0.5);
        }

        .sales-description p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            line-height: 1.8;
            text-align: justify;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        }

        .sales-techniques {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin: 40px 0;
        }

        .technique-card {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            border-radius: 20px;
            padding: 25px;
            color: white;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .technique-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(30px, -30px);
        }

        .technique-card:nth-child(2) {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }

        .technique-card:nth-child(3) {
            background: linear-gradient(135deg, #43e97b, #38f9d7);
        }

        .technique-card:nth-child(4) {
            background: linear-gradient(135deg, #fa709a, #fee140);
        }

        .technique-card:hover {
            transform: translateY(-10px) rotate(2deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .technique-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: block;
        }

        .technique-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .technique-desc {
            font-size: 1rem;
            line-height: 1.5;
            opacity: 0.9;
        }

        .closing-statement {
            text-align: center;
            margin-top: 50px;
            padding: 30px;
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.2), rgba(255, 140, 0, 0.2));
            border-radius: 25px;
            border: 2px solid rgba(255, 215, 0, 0.5);
        }

        .closing-statement h3 {
            color: #ffd700;
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 15px;
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.8);
        }

        .closing-statement p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.3rem;
            font-weight: 600;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 768px) {
            .skill-container {
                padding: 40px 25px;
                margin: 15px;
            }
            
            .skill-title {
                font-size: 2.5rem;
                letter-spacing: 2px;
            }
            
            .sales-stats {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 20px;
            }
            
            .stat-number {
                font-size: 2.2rem;
            }
            
            .sales-techniques {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="money-rain" id="moneyRain"></div>

    <div class="skill-container">
        <div class="skill-header">
            <div class="skill-icon">🚀💼</div>
            <h1 class="skill-title">Maestro de Ventas</h1>
            <p class="skill-subtitle">El arte de convertir conversaciones en oportunidades de oro</p>
        </div>

        <div class="sales-stats">
            <div class="stat-card">
                <div class="stat-number">98%</div>
                <div class="stat-label">Tasa de Conversión</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">3</div>
                <div class="stat-label">Sectores Dominados</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">150%</div>
                <div class="stat-label">Superar Metas</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">500+</div>
                <div class="stat-label">Ventas Exitosas</div>
            </div>
        </div>

        <div class="sales-description">
            <h3>La Venta Como Forma de Arte</h3>
            <p>
                No es solo sobre productos o servicios, es sobre crear conexiones genuinas y entender las necesidades reales de las personas. Mi enfoque se basa en la escucha activa, la empatía y la capacidad de presentar soluciones que realmente agreguen valor. Cada conversación es una oportunidad para construir confianza y generar resultados extraordinarios que superen las expectativas tanto del cliente como de la empresa.
            </p>
        </div>

        <div class="sales-techniques">
            <div class="technique-card">
                <span class="technique-icon">🎯</span>
                <h4 class="technique-title">Venta Consultiva</h4>
                <p class="technique-desc">Identifico necesidades específicas y construyo soluciones personalizadas que generen valor real.</p>
            </div>
            <div class="technique-card">
                <span class="technique-icon">🧠</span>
                <h4 class="technique-title">Psicología de Ventas</h4>
                <p class="technique-desc">Entiendo los procesos de decisión y aplico técnicas persuasivas éticas y efectivas.</p>
            </div>
            <div class="technique-card">
                <span class="technique-icon">💬</span>
                <h4 class="technique-title">Comunicación Efectiva</h4>
                <p class="technique-desc">Adapto mi mensaje y estilo de comunicación a cada tipo de cliente y situación.</p>
            </div>
            <div class="technique-card">
                <span class="technique-icon">🔥</span>
                <h4 class="technique-title">Cierre Persuasivo</h4>
                <p class="technique-desc">Domino múltiples técnicas de cierre y sé cuándo y cómo aplicar cada una.</p>
            </div>
        </div>

        <div class="closing-statement">
            <h3>Mi Filosofía de Ventas</h3>
            <p>"Vender no es convencer a alguien de comprar algo que no necesita, es ayudar a las personas a descubrir soluciones que mejoren su vida"</p>
        </div>
    </div>

    <script>
        // Crear lluvia de dinero animada
        function createMoneyRain() {
            const moneyRain = document.getElementById('moneyRain');
            const symbols = ['💰', '💵', '💸', '🤑', '💳', '💎'];
            
            function createDollar() {
                const dollar = document.createElement('div');
                dollar.className = 'dollar';
                dollar.textContent = symbols[Math.floor(Math.random() * symbols.length)];
                dollar.style.left = Math.random() * 100 + 'vw';
                dollar.style.animationDuration = (Math.random() * 3 + 2) + 's';
                dollar.style.animationDelay = Math.random() * 2 + 's';
                moneyRain.appendChild(dollar);
                
                setTimeout(() => {
                    dollar.remove();
                }, 5000);
            }
            
            // Crear un dólar cada 500ms
            setInterval(createDollar, 500);
        }
        
        // Iniciar la lluvia de dinero cuando la página carga
        window.addEventListener('load', createMoneyRain);
    </script>
</body>
</html>