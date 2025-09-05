<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia Cinemark VIP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(45deg, #0f0f23 0%, #1a1a2e 25%, #16213e 50%, #0f3460 75%, #533483 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 219, 255, 0.2) 0%, transparent 50%);
            z-index: 0;
            animation: backgroundMove 20s ease-in-out infinite;
        }

        @keyframes backgroundMove {
            0%, 100% { transform: rotate(0deg) scale(1); }
            33% { transform: rotate(1deg) scale(1.02); }
            66% { transform: rotate(-1deg) scale(0.98); }
        }

        .cinema-lights {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }

        .spotlight {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: spotlightMove 15s linear infinite;
        }

        .spotlight1 {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .spotlight2 {
            top: 70%;
            right: 10%;
            animation-delay: 5s;
        }

        .spotlight3 {
            bottom: 20%;
            left: 60%;
            animation-delay: 10s;
        }

        @keyframes spotlightMove {
            0% { transform: scale(1) rotate(0deg); opacity: 0.3; }
            50% { transform: scale(1.5) rotate(180deg); opacity: 0.7; }
            100% { transform: scale(1) rotate(360deg); opacity: 0.3; }
        }

        .experience-container {
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(30px);
            border-radius: 35px;
            border: 2px solid rgba(255, 255, 255, 0.1);
            padding: 50px;
            max-width: 700px;
            width: 100%;
            box-shadow: 
                0 40px 80px rgba(0, 0, 0, 0.5),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 3;
            animation: containerEntry 1s ease-out;
        }

        @keyframes containerEntry {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .film-strip {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, 
                #ff6b6b 0%, #ff6b6b 10%, 
                transparent 10%, transparent 20%,
                #ff6b6b 20%, #ff6b6b 30%,
                transparent 30%, transparent 40%,
                #ff6b6b 40%, #ff6b6b 50%,
                transparent 50%, transparent 60%,
                #ff6b6b 60%, #ff6b6b 70%,
                transparent 70%, transparent 80%,
                #ff6b6b 80%, #ff6b6b 90%,
                transparent 90%, transparent 100%);
            background-size: 40px 100%;
            animation: filmRoll 3s linear infinite;
            border-radius: 35px 35px 0 0;
        }

        @keyframes filmRoll {
            0% { background-position: 0 0; }
            100% { background-position: 40px 0; }
        }

        .section-title {
            color: #fff;
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 40px;
            text-align: center;
            text-shadow: 0 0 30px rgba(255, 107, 107, 0.5);
            background: linear-gradient(45deg, #ff6b6b, #ffd93d, #6bcf7f, #4d96ff);
            background-size: 400% 400%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textShine 4s ease-in-out infinite;
            position: relative;
            z-index: 4;
        }

        @keyframes textShine {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .job-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            border-radius: 30px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 4;
            overflow: hidden;
        }

        .job-card::before {
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
            animation: cardShimmer 3s infinite;
        }

        @keyframes cardShimmer {
            0% { left: -100%; }
            50% { left: 100%; }
            100% { left: 100%; }
        }

        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
            position: relative;
            z-index: 5;
        }

        .job-title {
            color: #fff;
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 12px;
            text-shadow: 0 2px 10px rgba(255, 107, 107, 0.3);
        }

        .job-title::before {
            content: '🎬';
            font-size: 1.4rem;
            filter: drop-shadow(0 0 10px rgba(255, 107, 107, 0.5));
        }

        .job-company {
            color: #ff6b6b;
            font-size: 1.4rem;
            font-weight: 600;
            margin: 10px 0;
            display: flex;
            align-items: center;
            gap: 10px;
            text-shadow: 0 2px 8px rgba(255, 107, 107, 0.4);
        }

        .job-company::before {
            content: '🎭';
            font-size: 1.1rem;
        }

        .job-period {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 12px 24px;
            border-radius: 35px;
            font-size: 1rem;
            font-weight: 700;
            white-space: nowrap;
            box-shadow: 
                0 8px 20px rgba(255, 107, 107, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .job-period::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .job-period:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 12px 30px rgba(255, 107, 107, 0.6);
        }

        .job-period:hover::before {
            left: 100%;
        }

        .vip-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #ffd93d, #ff9a3c);
            color: #1a1a1a;
            padding: 10px 18px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 700;
            margin: 10px 0;
            box-shadow: 0 5px 15px rgba(255, 217, 61, 0.4);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .vip-badge::before {
            content: '👑';
            font-size: 1.1rem;
        }

        .job-description {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
            margin-bottom: 30px;
            font-size: 1.1rem;
            text-align: justify;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 5;
        }

        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 25px 0;
            position: relative;
            z-index: 5;
        }

        .skill-tag {
            background: linear-gradient(135deg, #4d96ff, #9c27b0);
            color: white;
            padding: 10px 18px;
            border-radius: 30px;
            font-size: 0.95rem;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(77, 150, 255, 0.3);
        }

        .skill-tag::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s;
        }

        .skill-tag:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 10px 25px rgba(77, 150, 255, 0.5);
            filter: brightness(1.1);
        }

        .skill-tag:hover::before {
            left: 100%;
        }

        .achievements {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            border-radius: 25px;
            padding: 30px;
            margin-top: 30px;
            border: 1px solid rgba(255, 217, 61, 0.3);
            box-shadow: 
                0 15px 30px rgba(0, 0, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 5;
        }

        .achievements::before {
            content: '🏆';
            position: absolute;
            top: -15px;
            left: 25px;
            background: linear-gradient(135deg, #ffd93d, #ff9a3c);
            padding: 8px 12px;
            border-radius: 20px;
            font-size: 1.3rem;
            box-shadow: 0 5px 15px rgba(255, 217, 61, 0.4);
        }

        .achievements h4 {
            color: #ffd93d;
            margin-bottom: 20px;
            font-size: 1.3rem;
            font-weight: 800;
            margin-left: 25px;
            text-shadow: 0 2px 8px rgba(255, 217, 61, 0.3);
        }

        .achievements ul {
            list-style: none;
            padding: 0;
        }

        .achievements li {
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 12px;
            padding-left: 35px;
            position: relative;
            font-weight: 500;
            transition: all 0.3s ease;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .achievements li::before {
            content: '🎪';
            position: absolute;
            left: 0;
            font-size: 1.2rem;
            filter: drop-shadow(0 0 8px rgba(255, 217, 61, 0.5));
        }

        .achievements li:hover {
            color: #ffd93d;
            transform: translateX(10px);
            text-shadow: 0 2px 8px rgba(255, 217, 61, 0.4);
        }

        @media (max-width: 768px) {
            .experience-container {
                padding: 35px 25px;
                margin: 20px;
            }
            
            .section-title {
                font-size: 2.5rem;
            }
            
            .job-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .job-period {
                align-self: flex-start;
            }

            .job-title {
                font-size: 1.5rem;
            }

            .spotlight {
                width: 150px;
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="cinema-lights">
        <div class="spotlight spotlight1"></div>
        <div class="spotlight spotlight2"></div>
        <div class="spotlight spotlight3"></div>
    </div>

    <div class="experience-container">
        <div class="film-strip"></div>
        
        <h2 class="section-title">Experiencia Cinematográfica</h2>
        
        <div class="job-card">
            <div class="job-header">
                <div>
                    <h3 class="job-title">Operador VIP</h3>
                    <div class="job-company">Cinemark</div>
                    <div class="vip-badge">Servicio Premium</div>
                </div>
                <div class="job-period">Mar 2025 - Abr 2025</div>
            </div>
            
            <div class="job-description">
                Especialista en experiencias cinematográficas premium, encargado de brindar atención personalizada VIP durante la temporada alta de Semana Santa. Responsable de gestionar salas exclusivas, coordinar servicios de alto nivel y garantizar experiencias memorables para clientes premium en una de las cadenas de cine más prestigiosas del país.
            </div>
            
            <div class="skills-container">
                <span class="skill-tag">Atención VIP</span>
                <span class="skill-tag">Hospitalidad Premium</span>
                <span class="skill-tag">Gestión de Eventos</span>
                <span class="skill-tag">Servicio al Cliente</span>
                <span class="skill-tag">Protocolo de Atención</span>
                <span class="skill-tag">Multitasking</span>
                <span class="skill-tag">Trabajo bajo Presión</span>
            </div>
            
            <div class="achievements">
                <h4>Logros en Temporada Alta</h4>
                <ul>
                    <li>Gestioné más de 500 experiencias VIP durante Semana Santa con 98% de satisfacción</li>
                    <li>Coordiné eventos corporativos y estrenos exclusivos para clientes premium</li>
                    <li>Implementé protocolos de atención personalizada que aumentaron la fidelización VIP</li>
                    <li>Mantuve récord de cero quejas formales durante toda la temporada alta</li>
                    <li>Colaboré en la optimización de tiempos de servicio, reduciendo esperas en 40%</li>
                    <li>Capacité a 5 nuevos operadores en estándares de servicio premium</li>
                    <li>Gestioné exitosamente la logística de salas VIP en horarios pico</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>