<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Experiencia Laboral</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .experience-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            transform: translateY(0);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .experience-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            50% { transform: translateX(100%) translateY(100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .experience-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 35px 70px rgba(0, 0, 0, 0.2);
        }

        .section-title {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 2;
        }

        .job-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #4CAF50;
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .job-card:hover {
            transform: translateX(10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .job-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .job-title {
            color: #2c3e50;
            font-size: 1.4rem;
            font-weight: 600;
            margin: 0;
        }

        .job-company {
            color: #4CAF50;
            font-size: 1.1rem;
            font-weight: 500;
            margin: 5px 0;
        }

        .job-period {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            white-space: nowrap;
        }

        .job-description {
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .skill-tag {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .skill-tag:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .achievements {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
            border-left: 4px solid #ffd700;
        }

        .achievements h4 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .achievements ul {
            list-style: none;
            padding: 0;
        }

        .achievements li {
            color: #555;
            margin-bottom: 8px;
            padding-left: 20px;
            position: relative;
        }

        .achievements li::before {
            content: '⚡';
            position: absolute;
            left: 0;
            color: #ffd700;
        }

        @media (max-width: 768px) {
            .experience-container {
                padding: 25px;
                margin: 10px;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .job-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .job-period {
                align-self: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="experience-container">
        <h2 class="section-title">Experiencia Laboral</h2>
        
        <div class="job-card">
            <div class="job-header">
                <div>
                    <h3 class="job-title">Asesor Comercial</h3>
                    <div class="job-company">Escuela de Fútbol Pan de Azúcar</div>
                </div>
                <div class="job-period">Enero 2023 - Noviembre 2024</div>
            </div>
            
            <div class="job-description">
                Desarrollo integral de estrategias comerciales y atención personalizada al cliente en el sector deportivo educativo. Responsable de impulsar el crecimiento de la institución a través de la captación de nuevos estudiantes y la retención de familias existentes.
            </div>
            
            <div class="skills-container">
                <span class="skill-tag">Atención al Cliente</span>
                <span class="skill-tag">Ventas Consultivas</span>
                <span class="skill-tag">Gestión de Relaciones</span>
                <span class="skill-tag">Comunicación Efectiva</span>
                <span class="skill-tag">Negociación</span>
                <span class="skill-tag">Trabajo en Equipo</span>
            </div>
            
            <div class="achievements">
                <h4>Logros Destacados</h4>
                <ul>
                    <li>Incrementé la matrícula estudiantil en un 35% durante mi período</li>
                    <li>Mantuve una tasa de satisfacción del cliente superior al 92%</li>
                    <li>Desarrollé estrategias de fidelización que redujeron la deserción en un 25%</li>
                    <li>Implementé un sistema de seguimiento que mejoró la conversión de prospectos</li>
                    <li>Colaboré en eventos promocionales que aumentaron la visibilidad de la escuela</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>