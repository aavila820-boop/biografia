<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formación Académica - Cardenal Sancha</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 20%, #667eea 40%, #764ba2 60%, #f093fb 80%, #f5576c 100%);
            background-size: 400% 400%;
            animation: academicGradient 15s ease infinite;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        @keyframes academicGradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .knowledge-constellation {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .star {
            position: absolute;
            width: 4px;
            height: 4px;
            background: white;
            border-radius: 50%;
            animation: starTwinkle 3s ease-in-out infinite;
        }

        @keyframes starTwinkle {
            0%, 100% { 
                opacity: 0.3;
                transform: scale(1);
            }
            50% { 
                opacity: 1;
                transform: scale(1.5);
                box-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
            }
        }

        .academic-papers {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 2;
        }

        .paper {
            position: absolute;
            font-size: 2rem;
            color: rgba(255, 255, 255, 0.6);
            animation: paperFloat 12s linear infinite;
            pointer-events: none;
        }

        @keyframes paperFloat {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        .education-container {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(30px);
            border-radius: 40px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            padding: 60px;
            max-width: 1000px;
            width: 100%;
            box-shadow: 
                0 50px 100px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 5;
            animation: containerElevation 6s ease-in-out infinite;
        }

        @keyframes containerElevation {
            0%, 100% { 
                transform: translateY(0);
                box-shadow: 
                    0 50px 100px rgba(0, 0, 0, 0.3),
                    inset 0 1px 0 rgba(255, 255, 255, 0.2);
            }
            50% { 
                transform: translateY(-10px);
                box-shadow: 
                    0 60px 120px rgba(0, 0, 0, 0.4),
                    0 0 80px rgba(118, 75, 162, 0.3),
                    inset 0 1px 0 rgba(255, 255, 255, 0.3);
            }
        }

        .academic-ribbon {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(90deg, 
                #1e3c72 0%, #1e3c72 20%, 
                #ffd700 20%, #ffd700 40%,
                #1e3c72 40%, #1e3c72 60%,
                #ffd700 60%, #ffd700 80%,
                #1e3c72 80%, #1e3c72 100%);
            background-size: 60px 100%;
            animation: ribbonFlow 4s linear infinite;
            border-radius: 40px 40px 0 0;
        }

        @keyframes ribbonFlow {
            0% { background-position: 0 0; }
            100% { background-position: 60px 0; }
        }

        .education-header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .school-crest {
            font-size: 5rem;
            margin-bottom: 25px;
            display: inline-block;
            animation: crestGlow 4s ease-in-out infinite;
            filter: drop-shadow(0 0 40px rgba(255, 215, 0, 0.8));
        }

        @keyframes crestGlow {
            0%, 100% { 
                transform: scale(1);
                filter: drop-shadow(0 0 40px rgba(255, 215, 0, 0.8));
            }
            50% { 
                transform: scale(1.1);
                filter: drop-shadow(0 0 60px rgba(255, 215, 0, 1)) drop-shadow(0 0 80px rgba(30, 60, 114, 0.6));
            }
        }

        .section-title {
            color: #fff;
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 0 0 50px rgba(255, 215, 0, 0.8);
            background: linear-gradient(45deg, #ffd700, #ffffff, #1e3c72, #ffd700);
            background-size: 400% 400%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: titleAcademic 4s ease-in-out infinite;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        @keyframes titleAcademic {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .education-subtitle {
            color: #ffd700;
            font-size: 1.4rem;
            font-weight: 700;
            text-shadow: 0 0 25px rgba(255, 215, 0, 0.8);
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .school-card {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.05));
            border-radius: 30px;
            padding: 50px;
            margin-bottom: 40px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .school-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #1e3c72, #ffd700, #1e3c72, #ffd700);
            background-size: 400% 400%;
            animation: schoolBorder 5s linear infinite;
            border-radius: 30px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .school-card:hover::before {
            opacity: 1;
        }

        @keyframes schoolBorder {
            0% { background-position: 0% 50%; }
            100% { background-position: 400% 50%; }
        }

        .school-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 30px 60px rgba(30, 60, 114, 0.4);
        }

        .school-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        .school-info h3 {
            color: #fff;
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            text-shadow: 0 2px 15px rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .school-info h3::before {
            content: '🎓';
            font-size: 1.8rem;
            filter: drop-shadow(0 0 15px rgba(255, 215, 0, 0.8));
        }

        .school-name {
            color: #ffd700;
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.8);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .school-name::before {
            content: '🏛️';
            font-size: 1.2rem;
        }

        .graduation-badge {
            background: linear-gradient(135deg, #ffd700, #ffed4a);
            color: #1e3c72;
            padding: 15px 25px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 10px 25px rgba(255, 215, 0, 0.4);
            animation: badgeShine 3s ease-in-out infinite;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .graduation-badge::before {
            content: '🏆';
            font-size: 1.3rem;
        }

        @keyframes badgeShine {
            0%, 100% { 
                box-shadow: 0 10px 25px rgba(255, 215, 0, 0.4);
            }
            50% { 
                box-shadow: 0 15px 35px rgba(255, 215, 0, 0.6), 0 0 30px rgba(255, 215, 0, 0.3);
            }
        }

        .school-motto {
            background: linear-gradient(135deg, rgba(30, 60, 114, 0.3), rgba(255, 215, 0, 0.1));
            border-radius: 25px;
            padding: 25px;
            margin: 30px 0;
            border-left: 5px solid #ffd700;
            position: relative;
        }

        .school-motto::before {
            content: '📜';
            position: absolute;
            top: -12px;
            left: 20px;
            font-size: 2rem;
            background: linear-gradient(135deg, #ffd700, #1e3c72);
            padding: 8px 12px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(255, 215, 0, 0.4);
        }

        .school-motto p {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.4rem;
            font-weight: 700;
            text-align: center;
            font-style: italic;
            margin-left: 20px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
            letter-spacing: 1px;
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin: 40px 0;
        }

        .achievement-card {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            border-radius: 20px;
            padding: 30px;
            color: white;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            cursor: pointer;
            border: 1px solid rgba(255, 215, 0, 0.3);
        }

        .achievement-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 215, 0, 0.2), transparent);
            transition: left 0.6s;
        }

        .achievement-card:hover {
            transform: translateY(-10px) rotate(2deg);
            box-shadow: 0 20px 40px rgba(30, 60, 114, 0.4);
            border-color: rgba(255, 215, 0, 0.8);
        }

        .achievement-card:hover::before {
            left: 100%;
        }

        .achievement-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
            animation: achievementFloat 4s ease-in-out infinite;
        }

        @keyframes achievementFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        .achievement-title {
            font-size: 1.3rem;
            font-weight: 800;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #ffd700;
        }

        .achievement-desc {
            font-size: 1rem;
            line-height: 1.6;
            opacity: 0.95;
            font-weight: 500;
        }

        .legacy-statement {
            text-align: center;
            margin-top: 50px;
            padding: 40px;
            background: linear-gradient(135deg, rgba(30, 60, 114, 0.4), rgba(255, 215, 0, 0.2));
            border-radius: 30px;
            border: 3px solid rgba(255, 215, 0, 0.5);
            position: relative;
            overflow: hidden;
        }

        .legacy-statement::before {
            content: '';
            position: absolute;
            top: -100%;
            left: -100%;
            width: 300%;
            height: 300%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.05), transparent);
            animation: legacyShine 8s linear infinite;
        }

        @keyframes legacyShine {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .legacy-statement h3 {
            color: #ffd700;
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 0 0 30px rgba(255, 215, 0, 0.8);
            text-transform: uppercase;
            position: relative;
            z-index: 2;
        }

        .legacy-statement p {
            color: rgba(255, 255, 255, 0.95);
            font-size: 1.3rem;
            font-weight: 600;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
            position: relative;
            z-index: 2;
            line-height: 1.7;
        }

        .years-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 700;
            margin: 15px 0;
            box-shadow: 0 8px 20px rgba(30, 60, 114, 0.4);
            border: 2px solid rgba(255, 215, 0, 0.3);
        }

        .years-badge::before {
            content: '📅';
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .education-container {
                padding: 40px 25px;
                margin: 15px;
            }
            
            .section-title {
                font-size: 2.8rem;
                letter-spacing: 2px;
            }
            
            .school-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .achievements-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .school-info h3 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="knowledge-constellation" id="constellation"></div>
    <div class="academic-papers" id="academicPapers"></div>

    <div class="education-container">
        <div class="academic-ribbon"></div>
        
        <div class="education-header">
            <div class="school-crest">🎓⚜️🏛️</div>
            <h1 class="section-title">Formación Académica</h1>
            <p class="education-subtitle">Excelencia Educativa y Valores</p>
        </div>

        <div class="school-card">
            <div class="school-header">
                <div class="school-info">
                    <h3>Bachiller Académico</h3>
                    <div class="school-name">Colegio Cardenal Sancha</div>
                    <div class="years-badge">Cúcuta, Norte de Santander</div>
                </div>
                <div class="graduation-badge">Graduado 2022</div>
            </div>
            
            <div class="school-motto">
                <p>"Virtud y Ciencia por un Mundo Mejor"</p>
            </div>
            
            <div class="achievements-grid">
                <div class="achievement-card">
                    <span class="achievement-icon">📚</span>
                    <h4 class="achievement-title">64 Años de Tradición</h4>
                    <p class="achievement-desc">Institución con más de 6 décadas formando jóvenes con capacidad para la autogestión y liderazgo.</p>
                </div>
                <div class="achievement-card">
                    <span class="achievement-icon">⚜️</span>
                    <h4 class="achievement-title">Hermanas de la Caridad</h4>
                    <p class="achievement-desc">Educación basada en el carisma del Cardenal Ciriaco María Sancha y Hervás, con enfoque en valores cristianos.</p>
                </div>
                <div class="achievement-card">
                    <span class="achievement-icon">🏆</span>
                    <h4 class="achievement-title">Certificación ISO</h4>
                    <p class="achievement-desc">Calidad educativa garantizada con certificación en normas ISO 9001:2015, estándares internacionales de excelencia.</p>
                </div>
                <div class="achievement-card">
                    <span class="achievement-icon">🎯</span>
                    <h4 class="achievement-title">Formación Integral</h4>
                    <p class="achievement-desc">Desarrollo académico complementado con actividades deportivas y extracurriculares gratuitas.</p>
                </div>
                <div class="achievement-card">
                    <span class="achievement-icon">🌟</span>
                    <h4 class="achievement-title">Excelencia Académica</h4>
                    <p class="achievement-desc">Bachillerato académico con énfasis en preparación universitaria y desarrollo de competencias profesionales.</p>
                </div>
                <div class="achievement-card">
                    <span class="achievement-icon">🤝</span>
                    <h4 class="achievement-title">Valores Fundamentales</h4>
                    <p class="achievement-desc">Formación en virtudes, ética cristiana y compromiso social para ser agentes de cambio positivo.</p>
                </div>
            </div>
        </div>

        <div class="legacy-statement">
            <h3>Legado Cardenalicio</h3>
            <p>El Colegio Cardenal Sancha no solo me dio conocimiento académico, me forjó como persona íntegra. Esos años de formación bajo el lema "Virtud y Ciencia por un Mundo Mejor" marcaron mi carácter, mi ética de trabajo y mi compromiso con la excelencia. Cada valor inculcado, cada lección aprendida, cada desafío superado me preparó para ser el profesional competitivo y ético que soy hoy.</p>
        </div>
    </div>

    <script>
        // Crear constelación de conocimiento
        function createConstellation() {
            const constellation = document.getElementById('constellation');
            
            for (let i = 0; i < 50; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = Math.random() * 100 + 'vw';
                star.style.top = Math.random() * 100 + 'vh';
                star.style.animationDelay = Math.random() * 3 + 's';
                constellation.appendChild(star);
            }
        }

        // Crear papeles académicos flotantes
        function createAcademicPapers() {
            const container = document.getElementById('academicPapers');
            const symbols = ['📖', '📝', '📊', '🎓', '📋', '📐', '🔬', '🏆', '⭐', '💡'];
            
            function createPaper() {
                const paper = document.createElement('div');
                paper.className = 'paper';
                paper.textContent = symbols[Math.floor(Math.random() * symbols.length)];
                paper.style.left = Math.random() * 100 + 'vw';
                paper.style.animationDuration = (Math.random() * 8 + 6) + 's';
                paper.style.animationDelay = Math.random() * 3 + 's';
                
                container.appendChild(paper);
                
                setTimeout(() => {
                    paper.remove();
                }, 14000);
            }
            
            // Crear papel cada 1.5 segundos
            setInterval(createPaper, 1500);
        }
        
        // Iniciar efectos cuando la página carga
        window.addEventListener('load', () => {
            createConstellation();
            createAcademicPapers();
        });
    </script>
</body>
</html>