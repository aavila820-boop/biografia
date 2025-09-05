<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación - UNAB</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .education-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 1s ease-out;
        }
        
        .education-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite linear;
        }
        
        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
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
        
        .university-header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }
        
        .university-logo {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ff6b6b, #feca57);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            font-weight: bold;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .university-name {
            color: white;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .university-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-size: 16px;
            font-weight: 300;
        }
        
        .education-details {
            position: relative;
            z-index: 2;
        }
        
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #00b894, #00cec9);
            color: white;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 184, 148, 0.3);
            animation: glow 2s infinite alternate;
        }
        
        @keyframes glow {
            from { box-shadow: 0 5px 15px rgba(0, 184, 148, 0.3); }
            to { box-shadow: 0 5px 25px rgba(0, 184, 148, 0.6); }
        }
        
        .status-dot {
            width: 8px;
            height: 8px;
            background: #00ff88;
            border-radius: 50%;
            animation: blink 1.5s infinite;
        }
        
        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0.3; }
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .info-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }
        
        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(135deg, #ff6b6b, #feca57);
            border-radius: 0 2px 2px 0;
        }
        
        .info-label {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .info-value {
            color: white;
            font-size: 18px;
            font-weight: 600;
            line-height: 1.4;
        }
        
        .graduation-countdown {
            background: linear-gradient(135deg, #6c5ce7, #a29bfe);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            margin-top: 25px;
            box-shadow: 0 10px 30px rgba(108, 92, 231, 0.3);
        }
        
        .countdown-title {
            color: white;
            font-size: 16px;
            margin-bottom: 10px;
            opacity: 0.9;
        }
        
        .countdown-value {
            color: white;
            font-size: 24px;
            font-weight: 700;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }
        
        .progress-bar {
            width: 100%;
            height: 6px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
            margin-top: 15px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #00ff88, #00b894);
            border-radius: 3px;
            width: 60%;
            animation: progressGrow 2s ease-out;
        }
        
        @keyframes progressGrow {
            from { width: 0%; }
            to { width: 60%; }
        }
        
        @media (max-width: 480px) {
            .education-container {
                padding: 25px;
            }
            
            .university-name {
                font-size: 24px;
            }
            
            .info-value {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="education-container">
        <div class="university-header">
            <div class="university-logo">U</div>
            <h1 class="university-name">UNAB</h1>
            <p class="university-subtitle">Universidad Autónoma de Bucaramanga</p>
        </div>
        
        <div class="education-details">
            <div class="status-badge">
                <div class="status-dot"></div>
                Estudiante Activo
            </div>
            
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-label">Semestre Actual</div>
                    <div class="info-value">Sexto Semestre</div>
                </div>
                
                <div class="info-card">
                    <div class="info-label">Ubicación</div>
                    <div class="info-value">Bucaramanga, Santander</div>
                </div>
                
                <div class="info-card">
                    <div class="info-label">Acreditación</div>
                    <div class="info-value">Alta Calidad Institucional</div>
                </div>
            </div>
            
            <div class="graduation-countdown">
                <div class="countdown-title">🎓 Graduación Estimada</div>
                <div class="countdown-value">Mitad de 2027</div>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>