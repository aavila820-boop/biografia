<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angelo Fabian Avila Alarcon</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, 
                #667eea 0%, 
                #764ba2 25%, 
                #f093fb 50%, 
                #f5576c 75%, 
                #4facfe 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .container {
            text-align: center;
            position: relative;
            z-index: 2;
        }
        
        .name-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 30px;
            padding: 60px 40px;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.2),
                0 0 100px rgba(255, 255, 255, 0.1);
            transform: perspective(1000px) rotateX(5deg);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .name-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, 
                transparent, 
                rgba(255, 255, 255, 0.1), 
                transparent);
            animation: shimmer 3s linear infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }
        
        .name-card:hover {
            transform: perspective(1000px) rotateX(0deg) scale(1.05);
            box-shadow: 
                0 35px 70px rgba(0, 0, 0, 0.3),
                0 0 150px rgba(255, 255, 255, 0.2);
        }
        
        .first-name, .middle-name, .last-names {
            display: block;
            position: relative;
            z-index: 1;
        }
        
        .first-name {
            font-size: 4.5rem;
            font-weight: 800;
            background: linear-gradient(45deg, #ff6b6b, #feca57, #48dbfb, #ff9ff3);
            background-size: 300% 300%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textGradient 4s ease-in-out infinite;
            text-shadow: 0 0 30px rgba(255, 255, 255, 0.5);
            margin-bottom: 15px;
            letter-spacing: 3px;
        }
        
        @keyframes textGradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .middle-name {
            font-size: 3rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
            margin-bottom: 20px;
            letter-spacing: 2px;
            animation: pulse 2s ease-in-out infinite alternate;
        }
        
        @keyframes pulse {
            0% { opacity: 0.8; transform: scale(1); }
            100% { opacity: 1; transform: scale(1.02); }
        }
        
        .last-names {
            font-size: 2.5rem;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.85);
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
            letter-spacing: 1.5px;
            line-height: 1.2;
        }
        
        .lastname {
            display: inline-block;
            margin: 0 15px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .lastname::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(45deg, #ff6b6b, #48dbfb);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .lastname:hover {
            transform: translateY(-5px) scale(1.1);
            color: #fff;
            text-shadow: 0 0 25px rgba(255, 255, 255, 0.6);
        }
        
        .lastname:hover::after {
            width: 100%;
        }
        
        /* Partículas flotantes */
        .particle {
            position: fixed;
            width: 6px;
            height: 6px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
        }
        
        .particle:nth-child(1) { top: 20%; left: 10%; animation: float 6s ease-in-out infinite; }
        .particle:nth-child(2) { top: 60%; left: 85%; animation: float 8s ease-in-out infinite reverse; }
        .particle:nth-child(3) { top: 80%; left: 20%; animation: float 7s ease-in-out infinite; }
        .particle:nth-child(4) { top: 30%; left: 70%; animation: float 5s ease-in-out infinite reverse; }
        .particle:nth-child(5) { top: 70%; left: 60%; animation: float 9s ease-in-out infinite; }
        .particle:nth-child(6) { top: 15%; left: 40%; animation: float 4s ease-in-out infinite reverse; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.3; }
            50% { transform: translateY(-30px) rotate(180deg); opacity: 1; }
        }
        
        /* Responsivo */
        @media (max-width: 768px) {
            .name-card {
                padding: 40px 25px;
                margin: 20px;
            }
            
            .first-name {
                font-size: 3rem;
                letter-spacing: 2px;
            }
            
            .middle-name {
                font-size: 2.2rem;
                letter-spacing: 1.5px;
            }
            
            .last-names {
                font-size: 1.8rem;
                letter-spacing: 1px;
            }
            
            .lastname {
                display: block;
                margin: 10px 0;
            }
        }
        
        @media (max-width: 480px) {
            .first-name {
                font-size: 2.5rem;
                letter-spacing: 1px;
            }
            
            .middle-name {
                font-size: 1.8rem;
            }
            
            .last-names {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Partículas flotantes -->
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    
    <div class="container">
        <div class="name-card">
            <span class="first-name">ANGELO</span>
            <span class="middle-name">FABIAN</span>
            <div class="last-names">
                <span class="lastname">AVILA</span>
                <span class="lastname">ALARCON</span>
            </div>
        </div>
    </div>
</body>
</html>