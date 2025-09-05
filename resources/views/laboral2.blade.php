<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Experiencia en Call Center</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
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
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            z-index: 0;
        }

        .experience-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(25px);
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 45px;
            max-width: 650px;
            width: 100%;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 1;
        }

        .floating-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .circle1 {
            width: 60px;
            height: 60px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .circle2 {
            width: 40px;
            height: 40px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .circle3 {
            width: 30px;
            height: 30px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .section-title {
            color: white;
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 35px;
            text-align: center;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            background: linear-gradient(45deg, #fff, #f0f8ff);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            z-index: 3;
        }

        .job-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 25px;
            padding: 35px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border: 2px solid transparent;
            background-clip: padding-box;
            position: relative;
            z-index: 3;
            overflow: hidden;
        }

        .job-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #00d4ff, #090979, #ff006e);
            background-size: 200% 100%;
            animation: gradientShift 3s linear infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 0%; }
            100% { background-position: 200% 0%; }
        }

        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .job-title {
            color: #1a1a2e;
            font-size: 1.6rem;
            font-weight: 700;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .job-title::before {
            content: '📞';
            font-size: 1.2rem;
        }

        .job-company {
            color: #00d4ff;
            font-size: 1.2rem;
            font-weight: 600;
            margin: 8px 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .job-company::before {
            content: '🏥';
            font-size: 1rem;
        }

        .job-period {
            background: linear-gradient(135deg, #00d4ff, #090979);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 0.95rem;
            font-weight: 600;
            white-space: nowrap;
            box-shadow: 0 5px 15px rgba(0, 212, 255, 0.3);
            transform: perspective(1px) translateZ(0);
            transition: all 0.3s ease;
        }

        .job-period:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 212, 255, 0.4);
        }

        .job-description {
            color: #2c3e50;
            line-height: 1.7;
            margin-bottom: 25px;
            font-size: 1.05rem;
            text-align: justify;
        }

        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin: 20px 0;
        }

        .skill-tag {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .skill-tag::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .skill-tag:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
        }

        .skill-tag:hover::before {
            left: 100%;
        }

        .achievements {
            background: linear-gradient(135deg, #f8f9fa, #e3f2fd);
            border-radius: 20px;
            padding: 25px;
            margin-top: 25px;
            border: 2px solid #e1f5fe;
            position: relative;
        }

        .achievements::before {
            content: '🏆';
            position: absolute;
            top: -10px;
            left: 20px;
            background: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 1.2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .achievements h4 {
            color: #1565c0;
            margin-bottom: 15px;
            font-size: 1.2rem;
            font-weight: 700;
            margin-left: 20px;
        }

        .achievements ul {
            list-style: none;
            padding: 0;
        }

        .achievements li {
            color: #424242;
            margin-bottom: 10px;
            padding-left: 30px;
            position: relative;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .achievements li::before {
            content: '💊';
            position: absolute;
            left: 0;
            font-size: 1.1rem;
        }

        .achievements li:hover {
            color: #1565c0;
            transform: translateX(5px);
        }

        .sector-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #4caf50, #2e7d32);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin: 10px 0;
        }

        .sector-badge::before {
            content: '⚕️';
        }

        @media (max-width: 768px) {
            .experience-container {
                padding: 30px 20px;
                margin: 15px;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .job-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .job-period {
                align-self: flex-start;
            }

            .job-title {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <div class="floating-elements">
        <div class="floating-circle circle1"></div>
        <div class="floating-circle circle2"></div>
        <div class="floating-circle circle3"></div>
    </div>

    <div class="experience-container">
        <h2 class="section-title">Experiencia Reciente</h2>
        
        <div class="job-card">
            <div class="job-header">
                <div>
                    <h3 class="job-title">Agente de Ventas - Call Center</h3>
                    <div class="job-company">Clínica Vive Más</div>
                    <div class="sector-badge">Sector Salud</div>
                </div>
                <div class="job-period">Nov 2024 - Dic 2024</div>
            </div>
            
            <div class="job-description">
                Especialista en ventas telefónicas de productos farmacéuticos y servicios médicos, enfocado en brindar soluciones de salud personalizadas a través de consultas telefónicas profesionales. Responsable de la promoción y comercialización de medicamentos, manteniendo altos estándares éticos y de atención al cliente en el sector sanitario.
            </div>
            
            <div class="skills-container">
                <span class="skill-tag">Ventas Telefónicas</span>
                <span class="skill-tag">Conocimiento Farmacéutico</span>
                <span class="skill-tag">Atención Médica</span>
                <span class="skill-tag">Comunicación Persuasiva</span>
                <span class="skill-tag">Ética Profesional</span>
                <span class="skill-tag">Gestión de Objeciones</span>
                <span class="skill-tag">CRM</span>
            </div>
            
            <div class="achievements">
                <h4>Logros en Call Center</h4>
                <ul>
                    <li>Superé las metas de ventas mensuales en un 120% durante mi período</li>
                    <li>Mantuve un índice de satisfacción del cliente del 94% en encuestas post-venta</li>
                    <li>Desarrollé expertise en productos farmacéuticos y suplementos nutricionales</li>
                    <li>Gestioné exitosamente más de 150 llamadas semanales con alta conversión</li>
                    <li>Implementé técnicas de venta consultiva enfocadas en bienestar del paciente</li>
                    <li>Colaboré en la capacitación de nuevos agentes sobre protocolos de salud</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>