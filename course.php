<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Course</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- top section -->
    <section class="sub-header">
    <?php if(file_exists('navbar.php')){include 'navbar.php';} ?>
     <h1>Our Courses</h1>
    </section>
    <!-- Course section -->
    <section class="course">
      <h1>Courses We Offer</h1>
      <p>Explore a wide variety of academic programs designed to empower your future!</p>


      <div class="selection-box">
        <select id="course-select" onchange="selectedCourse()">
          <option value="" disabled selected>Select a Course</option>
        
          <!-- Undergraduate Courses -->
          <optgroup label="Undergraduate Courses">
            <option value="bsc">Bachelor of Science (B.Sc)</option>
            <option value="ba">Bachelor of Arts (B.A)</option>
            <option value="bcom">Bachelor of Commerce (B.Com)</option>
            <option value="be">Bachelor of Engineering (B.E)</option>
            <option value="btech">Bachelor of Technology (B.Tech)</option>
            <option value="bba">Bachelor of Business Administration (BBA)</option>
            <option value="llb">Bachelor of Laws (LLB)</option>
            <option value="mbbs">Bachelor of Medicine, Bachelor of Surgery (MBBS)</option>
          </optgroup>
        
          <!-- Postgraduate Courses -->
          <optgroup label="Postgraduate Courses">
            <option value="msc">Master of Science (M.Sc)</option>
            <option value="ma">Master of Arts (M.A)</option>
            <option value="mcom">Master of Commerce (M.Com)</option>
            <option value="me">Master of Engineering (M.E)</option>
            <option value="mtech">Master of Technology (M.Tech)</option>
            <option value="mba">Master of Business Administration (MBA)</option>
            <option value="llm">Master of Laws (LLM)</option>
            <option value="md">Doctor of Medicine (M.D)</option>
          </optgroup>
        
          <!-- Professional and Other Courses -->
          <optgroup label="Professional Courses">
            <option value="ca">Chartered Accountant (CA)</option>
            <option value="cma">Cost and Management Accountant (CMA)</option>
            <option value="cs">Company Secretary (CS)</option>
            <option value="pgdm">Post Graduate Diploma in Management (PGDM)</option>
            <option value="dpharm">Diploma in Pharmacy (D.Pharm)</option>
            <option value="bpharm">Bachelor of Pharmacy (B.Pharm)</option>
          </optgroup>
        </select>
        
      
      </div>

      <div class="row">
        <div class="course-col bsc" id="bsc">
            <h3 class="course-col-h3">B.Sc Computer Science</h3>
            <p>Explore the foundations of computing, algorithms, and software development. This course prepares you for careers in software engineering and IT.</p>
        </div>
        <div class="course-col bsc" id="bsc">
            <h3>B.Sc Computer Technology</h3>
            <p>Dive into the technical aspects of computers, including hardware, networking, and system architecture. Ideal for tech enthusiasts.</p>
        </div>
        <div class="course-col bsc" id="bsc">
            <h3>B.Sc Information Technology</h3>
            <p>Learn about data management, cybersecurity, and IT solutions for modern businesses. Tailored for future IT managers.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Software Engineering</h3>
            <p>Master the art of software design, development, and project management. Perfect for aspiring software developers.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Artificial Intelligence</h3>
            <p>Understand the principles of AI, machine learning, and neural networks. Designed for innovators in AI and robotics.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Data Science</h3>
            <p>Analyze and interpret complex data sets using advanced statistical tools and programming languages.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Cybersecurity</h3>
            <p>Study techniques to protect systems from cyber threats and learn to manage secure networks and systems.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Cloud Computing</h3>
            <p>Learn about cloud platforms, virtual environments, and scalable software solutions for enterprises.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Game Development</h3>
            <p>Combine creativity and technology to design, develop, and produce interactive gaming experiences.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Robotics</h3>
            <p>Delve into robotics design, automation, and control systems. Ideal for future robotics engineers.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Internet of Things (IoT)</h3>
            <p>Understand the interconnectivity of devices, sensors, and applications in the IoT ecosystem.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Blockchain Technology</h3>
            <p>Explore the decentralized world of blockchain, cryptocurrency, and distributed ledger technologies.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Multimedia and Animation</h3>
            <p>Learn the art of multimedia production, animation techniques, and visual storytelling.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Bioinformatics</h3>
            <p>Bridge biology and technology by analyzing biological data with computational tools.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Environmental Science</h3>
            <p>Study the science of sustainability, natural resource management, and environmental conservation.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Mathematics</h3>
            <p>Focus on advanced mathematical concepts, problem-solving, and statistical methods.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Physics</h3>
            <p>Explore the laws of nature, quantum mechanics, and theoretical physics for a deeper understanding of the universe.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Chemistry</h3>
            <p>Study the composition, properties, and reactions of substances. Ideal for aspiring chemists and researchers.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Biotechnology</h3>
            <p>Discover advancements in genetics, molecular biology, and bioprocess technology for a career in biotech.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Astronomy</h3>
            <p>Learn about celestial objects, space exploration, and the physics of the cosmos. Perfect for space enthusiasts.</p>
        </div>
        <div class="course-col" id="bsc">
            <h3>B.Sc Psychology</h3>
            <p>Understand human behavior, cognitive processes, and emotional well-being to create meaningful impacts in society.</p>
        </div>
        <div class="course-col" id="msc">
          <h3>M.Sc Computer Science</h3>
          <p>Advanced studies in computing, algorithms, and emerging technologies for software and IT professionals.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Information Technology</h3>
          <p>Focus on IT management, cloud computing, and cutting-edge technologies for future IT leaders.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Data Science</h3>
          <p>Specialize in data analysis, predictive modeling, and big data technologies for informed decision-making.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Artificial Intelligence</h3>
          <p>Deep dive into AI concepts, neural networks, and natural language processing for innovative solutions.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Cybersecurity</h3>
          <p>Enhance your knowledge of network security, ethical hacking, and cybersecurity protocols for secure systems.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Cloud Computing</h3>
          <p>Master scalable computing solutions, virtualization, and cloud-based infrastructures for enterprise needs.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Robotics</h3>
          <p>Advanced studies in automation, robotics engineering, and AI integration for industrial and research applications.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Blockchain Technology</h3>
          <p>Specialize in distributed ledger systems, cryptocurrency, and decentralized application development.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Multimedia and Animation</h3>
          <p>Enhance your skills in creative multimedia production, 3D modeling, and advanced animation techniques.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Bioinformatics</h3>
          <p>Combine computational tools with biological sciences to analyze and interpret complex biological data.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Environmental Science</h3>
          <p>Advanced studies in environmental research, sustainability, and ecological preservation.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Mathematics</h3>
          <p>Explore advanced mathematical theories, analytical techniques, and statistical research methodologies.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Physics</h3>
          <p>Deep dive into theoretical physics, quantum mechanics, and applied physics for scientific innovation.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Chemistry</h3>
          <p>Specialize in organic, inorganic, and physical chemistry for careers in research and industry.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Biotechnology</h3>
          <p>Advanced studies in genetic engineering, molecular biology, and biotech innovations for healthcare and industry.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Astronomy</h3>
          <p>Advanced exploration of space sciences, astrophysics, and cosmology for research and discovery.</p>
      </div>
      <div class="course-col" id="msc">
          <h3>M.Sc Psychology</h3>
          <p>Specialize in clinical, industrial, or counseling psychology for advanced insights into human behavior.</p>
      </div>
      <div class="course-col" id="ba">
        <h3>BA English Literature</h3>
        <p>Study English literature, language, and critical theory to develop a deep understanding of literary works and their historical context.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA History</h3>
        <p>Explore historical events, cultural developments, and their impact on society to gain insights into the past and present.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Sociology</h3>
        <p>Study the structure of societies, social behavior, and institutions to understand human relationships and social dynamics.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Political Science</h3>
        <p>Learn about political systems, governance, international relations, and political theory to understand the functioning of states and societies.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Psychology</h3>
        <p>Study the human mind and behavior, with special focus on clinical, counseling, and developmental psychology.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Economics</h3>
        <p>Learn about economic theory, market dynamics, and financial systems to understand how economies operate.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Philosophy</h3>
        <p>Engage with fundamental questions regarding existence, knowledge, ethics, and reason, through critical thinking and analysis.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Fine Arts</h3>
        <p>Develop creative skills in visual arts, sculpture, painting, and other artistic expressions, focusing on art history and contemporary practices.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Journalism</h3>
        <p>Study the art of reporting, writing, and editing news for various media platforms, with a focus on ethical journalism practices.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Music</h3>
        <p>Explore music theory, performance, and composition while gaining knowledge in different genres of music from classical to contemporary.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Theatre Arts</h3>
        <p>Learn the craft of acting, directing, and stage production, and understand the historical and cultural significance of theatre arts.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Geography</h3>
        <p>Explore the physical and human aspects of geography, including landforms, climate, and urban development.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Anthropology</h3>
        <p>Study human societies, cultures, and their development through archaeological, biological, and sociocultural perspectives.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Education</h3>
        <p>Gain an in-depth understanding of educational theory, pedagogy, and the psychological aspects of teaching and learning.</p>
    </div>
    <div class="course-col" id="ba">
        <h3>BA Fashion Design</h3>
        <p>Learn the art of designing clothing, textiles, and accessories, while gaining an understanding of the fashion industry and trends.</p>
    </div>
    <div class="course-col" id="bcom">
      <h3>B.Com General</h3>
      <p>Study the basics of commerce, accounting, economics, and business law to build a foundation for a career in business and finance.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Accounting</h3>
      <p>Focus on accounting principles, financial reporting, auditing, and taxation to prepare for a career in finance or accounting.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Finance</h3>
      <p>Gain expertise in financial management, investment analysis, and corporate finance to pursue careers in banking and investment.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Marketing</h3>
      <p>Learn marketing strategies, consumer behavior, advertising, and sales management to enter the dynamic world of business and marketing.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com International Business</h3>
      <p>Understand global business dynamics, international trade, and cross-cultural management to build a career in international business.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com E-Commerce</h3>
      <p>Explore online business models, digital marketing, and electronic transactions to succeed in the fast-growing e-commerce industry.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Business Analytics</h3>
      <p>Learn data analysis, statistical techniques, and decision-making processes to provide insights for business strategies and operations.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Banking and Insurance</h3>
      <p>Study the banking and insurance sectors, including policies, operations, and financial regulations, for a career in financial services.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Taxation</h3>
      <p>Gain an in-depth understanding of tax laws, tax planning, and the tax administration process for careers in taxation and finance.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Human Resource Management</h3>
      <p>Learn about organizational behavior, employee management, labor laws, and HR practices for roles in human resource management.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Entrepreneurship</h3>
      <p>Develop skills in business development, leadership, and innovation to start and manage your own business successfully.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Computer Applications</h3>
      <p>Learn the use of computer systems, software applications, and data management tools in business and commerce environments.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Cost Accounting</h3>
      <p>Study the principles of cost management, cost analysis, and budgeting to enhance financial efficiency in business organizations.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Logistics and Supply Chain Management</h3>
      <p>Gain expertise in supply chain management, logistics operations, and inventory control to manage business logistics efficiently.</p>
  </div>
  <div class="course-col" id="bcom">
      <h3>B.Com Business Law</h3>
      <p>Study the legal framework governing business transactions, contracts, and corporate governance to ensure compliance and risk management.</p>
  </div>
  <div class="course-col" id="be">
    <h3>B.E Computer Science Engineering</h3>
    <p>Learn about computer systems, software development, algorithms, and network architecture for careers in IT and software engineering.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Electrical Engineering</h3>
    <p>Study electrical circuits, power systems, and electronics for careers in electrical infrastructure, renewable energy, and automation.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Civil Engineering</h3>
    <p>Learn the principles of construction, structural analysis, and material science for designing and building infrastructure projects.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Mechanical Engineering</h3>
    <p>Study mechanics, thermodynamics, and materials science to design and manufacture machines and mechanical systems.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Electronics and Communication Engineering</h3>
    <p>Focus on electronic circuits, communication systems, and signal processing for careers in telecommunication and electronic industries.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Information Technology</h3>
    <p>Explore the design, development, and management of software systems, networks, and databases to support IT infrastructure.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Biotechnology</h3>
    <p>Combine engineering and biology to develop technologies in healthcare, agriculture, and environmental sustainability.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Chemical Engineering</h3>
    <p>Study chemical processes, material properties, and production techniques to innovate in industries like pharmaceuticals, energy, and manufacturing.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Aerospace Engineering</h3>
    <p>Learn the principles of flight mechanics, propulsion, and aircraft design for careers in aviation, space exploration, and defense industries.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Environmental Engineering</h3>
    <p>Focus on designing solutions to environmental problems, including waste management, pollution control, and sustainable development.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Agricultural Engineering</h3>
    <p>Study the application of engineering principles to agriculture, including irrigation, machinery, and sustainable farming practices.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Robotics Engineering</h3>
    <p>Learn about the design, construction, and operation of robots and automated systems for use in manufacturing, healthcare, and research.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Petroleum Engineering</h3>
    <p>Focus on the exploration, extraction, and processing of petroleum and natural gas resources for energy production.</p>
</div>
<div class="course-col" id="be">
    <h3>B.E Industrial Engineering</h3>
    <p>Study the optimization of complex systems and processes to improve productivity, efficiency, and quality in industries.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Computer Science and Engineering</h3>
  <p>Explore computer systems, software development, artificial intelligence, and data science for careers in IT and technology.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Electronics and Communication Engineering</h3>
  <p>Learn about electronic devices, communication systems, and signal processing for careers in electronics, telecommunications, and digital systems.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Mechanical Engineering</h3>
  <p>Study the principles of mechanics, thermodynamics, fluid dynamics, and materials science for careers in manufacturing and automation.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Civil Engineering</h3>
  <p>Focus on designing, planning, and constructing infrastructure like bridges, roads, and buildings for careers in construction and urban development.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Electrical Engineering</h3>
  <p>Study electrical circuits, power generation, renewable energy, and automation for careers in electrical power systems and electronic devices.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Information Technology</h3>
  <p>Learn about software development, networking, databases, and IT infrastructure to build and manage technology solutions.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Biotechnology</h3>
  <p>Combine engineering with biological sciences to innovate in healthcare, pharmaceuticals, agriculture, and environmental sustainability.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Chemical Engineering</h3>
  <p>Explore chemical reactions, material properties, and industrial production techniques for careers in energy, chemicals, and manufacturing industries.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Aerospace Engineering</h3>
  <p>Study aerodynamics, propulsion, and aerospace systems to pursue careers in aviation, space exploration, and defense industries.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Artificial Intelligence and Machine Learning</h3>
  <p>Learn about AI algorithms, machine learning models, robotics, and data processing for innovative solutions in technology.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Robotics Engineering</h3>
  <p>Focus on the design, development, and application of robots and automated systems in industries like manufacturing, healthcare, and research.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Environmental Engineering</h3>
  <p>Study sustainable solutions to environmental issues, including waste management, water treatment, and pollution control.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Mechatronics Engineering</h3>
  <p>Combine mechanical, electrical, and computer engineering to design and develop smart automated systems and robots.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Data Science</h3>
  <p>Learn about big data analytics, data mining, machine learning, and statistical analysis to derive insights from complex data sets.</p>
</div>
<div class="course-col" id="btech">
  <h3>B.Tech Cybersecurity</h3>
  <p>Study network security, cryptography, and ethical hacking to protect digital infrastructure and data in the modern world.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A General Management</h3>
  <p>Gain foundational knowledge in management, business operations, and organizational behavior to become an effective leader.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Marketing</h3>
  <p>Specialize in market research, consumer behavior, advertising, and brand management for careers in marketing and sales.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Finance</h3>
  <p>Learn about financial management, investment strategies, and banking to pursue careers in financial analysis, accounting, and corporate finance.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Human Resource Management</h3>
  <p>Focus on recruitment, employee relations, training, and labor laws to effectively manage human capital in organizations.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A International Business</h3>
  <p>Study global trade, international marketing, and cross-cultural management for careers in global business and foreign trade.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Entrepreneurship</h3>
  <p>Learn the essentials of starting and managing a business, including innovation, financial management, and strategic planning.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Supply Chain Management</h3>
  <p>Gain expertise in logistics, inventory management, procurement, and transportation for careers in operations and supply chain management.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Retail Management</h3>
  <p>Focus on retail marketing, inventory management, and customer relationship strategies for careers in the retail industry.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Hospitality Management</h3>
  <p>Specialize in hotel and event management, customer service, and tourism for careers in the hospitality and tourism industries.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Banking and Insurance</h3>
  <p>Study financial services, risk management, and insurance policies for careers in banking, insurance, and investment sectors.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Digital Marketing</h3>
  <p>Learn digital marketing strategies, SEO, social media, and content creation to pursue careers in online marketing and branding.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Event Management</h3>
  <p>Focus on organizing and managing corporate events, conferences, and weddings for careers in event planning and coordination.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Business Analytics</h3>
  <p>Learn how to interpret and analyze business data, build data models, and make strategic business decisions.</p>
</div>
<div class="course-col" id="bba">
  <h3>B.B.A Project Management</h3>
  <p>Focus on project planning, execution, risk management, and leadership skills to effectively manage projects in any industry.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B General</h3>
  <p>Study the fundamental principles of law, legal systems, and constitutional law to prepare for a career in law practice and advocacy.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Constitutional Law</h3>
  <p>Specialize in the structure of government, civil rights, and the interpretation of constitutions to shape policy and legal reforms.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Criminal Law</h3>
  <p>Focus on criminal offenses, law enforcement, and legal defense to pursue careers as criminal lawyers, prosecutors, or legal advisors.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Corporate Law</h3>
  <p>Learn about corporate governance, mergers and acquisitions, intellectual property, and commercial contracts for a career in corporate law.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Family Law</h3>
  <p>Study issues such as marriage, divorce, inheritance, and adoption, focusing on the legal aspects of family-related matters.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Labour Law</h3>
  <p>Explore the relationship between employers, employees, and trade unions, with a focus on workers' rights and industrial relations.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B International Law</h3>
  <p>Study the laws governing international relations, treaties, and the legal frameworks of organizations like the United Nations and the World Trade Organization.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Environmental Law</h3>
  <p>Focus on laws related to environmental protection, natural resource management, and sustainable development practices.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Taxation Law</h3>
  <p>Learn about tax systems, corporate taxation, and personal tax policies for careers in tax consultancy or corporate legal advisory.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Intellectual Property Law</h3>
  <p>Specialize in copyrights, patents, trademarks, and trade secrets to protect the intellectual creations and innovations of individuals and companies.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Human Rights Law</h3>
  <p>Focus on the protection of human rights, civil liberties, and social justice issues on both national and international levels.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Maritime and Admiralty Law</h3>
  <p>Study laws related to shipping, navigation, and the transportation of goods by sea, including environmental regulations and marine insurance.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Banking and Finance Law</h3>
  <p>Learn about financial regulations, banking operations, securities laws, and the legal aspects of finance and investment.</p>
</div>
<div class="course-col" id="llb">
  <h3>LL.B Dispute Resolution</h3>
  <p>Focus on mediation, arbitration, and alternative dispute resolution methods for resolving conflicts outside the courtroom.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS General Medicine</h3>
  <p>Study the fundamentals of human health, disease diagnosis, and treatment to prepare for a career in medical practice and healthcare.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Surgery</h3>
  <p>Specialize in surgical procedures, operations, and patient care in a clinical setting to become a skilled surgeon.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Pediatrics</h3>
  <p>Focus on the diagnosis and treatment of medical conditions affecting infants, children, and adolescents.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Obstetrics and Gynecology</h3>
  <p>Study female reproductive health, childbirth, and gynecological diseases, preparing for a career in women’s health.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Dermatology</h3>
  <p>Specialize in the treatment of skin conditions, diseases, and cosmetic procedures for skin health.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Psychiatry</h3>
  <p>Study mental health conditions, psychological disorders, and therapeutic approaches to treat patients with psychiatric issues.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Radiology</h3>
  <p>Focus on the use of medical imaging technologies like X-rays, MRI, and CT scans to diagnose and monitor diseases.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Anesthesia</h3>
  <p>Learn about anesthetic procedures, pain management, and patient safety during surgeries and other medical interventions.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Pathology</h3>
  <p>Focus on the study of diseases, their causes, and effects through laboratory tests and investigations to aid in diagnosis and treatment.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Emergency Medicine</h3>
  <p>Prepare for quick medical decision-making and treatment in emergency settings, focusing on trauma care and life-saving procedures.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Cardiology</h3>
  <p>Specialize in diagnosing and treating heart-related conditions, including heart diseases, disorders, and surgeries.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Neurology</h3>
  <p>Study the nervous system and neurological diseases, focusing on the diagnosis and treatment of conditions like strokes, epilepsy, and neurodegenerative diseases.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Orthopedics</h3>
  <p>Learn about the musculoskeletal system and the treatment of injuries, diseases, and disorders related to bones, joints, and muscles.</p>
</div>
<div class="course-col" id="mbbs">
  <h3>MBBS Urology</h3>
  <p>Specialize in diagnosing and treating disorders related to the urinary system and male reproductive organs.</p>
</div>
<div class="course-col" id="ma">
  <h3>MA English Literature</h3>
  <p>Explore classic and contemporary literature, focusing on critical analysis, literary history, and creative writing techniques.</p>
</div>
<div class="course-col" id="ma">
  <h3>MA Psychology</h3>
  <p>Study human behavior, cognition, and emotion through research, practical experience, and psychological theory.</p>
</div>
<div class="course-col" id="ma">
  <h3>MA History</h3>
  <p>Delve into historical events, periods, and research methodologies to analyze and interpret past civilizations.</p>
</div>
<div class="course-col" id="ma">
  <h3>MA Political Science</h3>
  <p>Study political theory, institutions, international relations, and policy-making processes.</p>
</div>
<div class="course-col" id="ma">
  <h3>MA Sociology</h3>
  <p>Learn about the structure of societies, social relationships, and the forces that shape social behavior.</p>
</div>
<div class="course-col" id="ma">
  <h3>MA Economics</h3>
  <p>Focus on microeconomics, macroeconomics, statistical analysis, and economic policies to understand global markets and economies.</p>
</div>
<div class="course-col" id="ma">
  <h3>MA Philosophy</h3>
  <p>Study ancient and modern philosophical theories, ethical dilemmas, logic, and the fundamental questions of existence.</p>
</div>
<div class="course-col" id="mcom">
  <h3>MCom Accounting</h3>
  <p>Specialize in financial accounting, auditing, taxation, and managerial accounting for careers in business and finance.</p>
</div>
<div class="course-col" id="mcom">
  <h3>MCom Finance</h3>
  <p>Learn about financial management, corporate finance, and investment analysis for roles in banking, investment, and finance sectors.</p>
</div>
<div class="course-col" id="mcom">
  <h3>MCom Business Administration</h3>
  <p>Focus on business management strategies, operations, and decision-making to pursue a leadership role in business organizations.</p>
</div>
<div class="course-col" id="mcom">
  <h3>MCom International Business</h3>
  <p>Study global trade, international marketing, and cross-border business strategies to work in multinational companies.</p>
</div>
<div class="course-col" id="mcom">
  <h3>MCom Marketing</h3>
  <p>Specialize in marketing strategies, consumer behavior, advertising, and brand management for careers in marketing management.</p>
</div>
<div class="course-col" id="mcom">
  <h3>MCom Economics</h3>
  <p>Learn advanced economic principles, quantitative techniques, and global economic trends to influence public policy and business strategies.</p>
</div>
<div class="course-col" id="me">
  <h3>ME Civil Engineering</h3>
  <p>Specialize in structural analysis, construction materials, and infrastructure design for a career in civil engineering projects.</p>
</div>
<div class="course-col" id="me">
  <h3>ME Mechanical Engineering</h3>
  <p>Study advanced mechanics, thermodynamics, materials science, and mechanical systems design for innovative engineering solutions.</p>
</div>
<div class="course-col" id="me">
  <h3>ME Electrical Engineering</h3>
  <p>Focus on electrical circuits, power systems, and control systems to design and manage electrical systems and technologies.</p>
</div>
<div class="course-col" id="me">
  <h3>ME Computer Engineering</h3>
  <p>Learn about computer architecture, software engineering, and networking to create advanced computing systems and technologies.</p>
</div>
<div class="course-col" id="me">
  <h3>ME Electronics and Communication Engineering</h3>
  <p>Specialize in electronic systems, communication technologies, and signal processing for designing advanced electronic and communication devices.</p>
</div>
<div class="course-col" id="me">
  <h3>ME Structural Engineering</h3>
  <p>Study advanced concepts in the design and analysis of structures, focusing on bridges, buildings, and other infrastructure projects.</p>
</div>
<div class="course-col" id="mtech">
  <h3>MTech Computer Science</h3>
  <p>Focus on software development, artificial intelligence, data structures, and algorithms for building innovative technology solutions.</p>
</div>
<div class="course-col" id="mtech">
  <h3>MTech Information Technology</h3>
  <p>Learn about networking, cloud computing, security, and IT infrastructure for a career in technology management and solutions.</p>
</div>
<div class="course-col" id="mtech">
  <h3>MTech Artificial Intelligence</h3>
  <p>Specialize in machine learning, neural networks, and robotics for developing intelligent systems and solutions in various industries.</p>
</div>
<div class="course-col" id="mtech">
  <h3>MTech Data Science</h3>
  <p>Focus on big data analytics, predictive modeling, and statistical techniques to analyze and interpret large datasets for decision-making.</p>
</div>
<div class="course-col" id="mtech">
  <h3>MTech Robotics</h3>
  <p>Learn about automation, robotics design, and AI integration to develop cutting-edge robotic systems for industrial and research applications.</p>
</div>
<div class="course-col" id="mtech">
  <h3>MTech VLSI Design</h3>
  <p>Specialize in very-large-scale integration, circuit design, and semiconductor technology for developing advanced electronic devices and systems.</p>
</div>
<div class="course-col" id="mba">
  <h3>MBA General Management</h3>
  <p>Focus on leadership, business strategy, and management practices for a career in top-level business administration.</p>
</div>
<div class="course-col" id="mba">
  <h3>MBA Finance</h3>
  <p>Specialize in financial analysis, corporate finance, and investment management for careers in banking, finance, and investment.</p>
</div>
<div class="course-col" id="mba">
  <h3>MBA Marketing</h3>
  <p>Study consumer behavior, advertising, branding, and digital marketing to shape the future of business marketing.</p>
</div>
<div class="course-col" id="mba">
  <h3>MBA Human Resource Management</h3>
  <p>Learn about talent management, organizational behavior, and HR strategies for leadership in human resources.</p>
</div>
<div class="course-col" id="mba">
  <h3>MBA International Business</h3>
  <p>Focus on global trade, cross-cultural communication, and international market strategies for a career in global business management.</p>
</div>
<div class="course-col" id="mba">
  <h3>MBA Operations Management</h3>
  <p>Specialize in supply chain management, production strategies, and logistics to improve business operations and processes.</p>
</div>
<div class="course-col" id="mba">
  <h3>MBA Entrepreneurship</h3>
  <p>Develop skills in business innovation, startup management, and venture capital to lead new and emerging businesses.</p>
</div>
<div class="course-col" id="llm">
  <h3>LLM International Law</h3>
  <p>Focus on international legal principles, treaties, and global human rights law for a career in diplomacy or international legal practice.</p>
</div>
<div class="course-col" id="llm">
  <h3>LLM Corporate Law</h3>
  <p>Specialize in business law, mergers and acquisitions, and corporate governance for a career in corporate legal practice.</p>
</div>
<div class="course-col" id="llm">
  <h3>LLM Criminal Law</h3>
  <p>Study criminal justice systems, laws related to criminal offenses, and legal strategies for defense and prosecution.</p>
</div>
<div class="course-col" id="llm">
  <h3>LLM Environmental Law</h3>
  <p>Focus on environmental policies, climate change law, and natural resource regulation for careers in environmental protection and advocacy.</p>
</div>
<div class="course-col" id="llm">
  <h3>LLM Taxation Law</h3>
  <p>Specialize in tax law, corporate taxation, and estate planning for a career in tax consulting or law practice.</p>
</div>
<div class="course-col" id="llm">
  <h3>LLM Human Rights Law</h3>
  <p>Learn about the protection of individual freedoms, social justice, and international human rights standards for careers in human rights organizations.</p>
</div>
<div class="course-col" id="md">
  <h3>MD General Medicine</h3>
  <p>Advanced studies in diagnosing, treating, and managing common and complex medical conditions to prepare for clinical practice.</p>
</div>
<div class="course-col" id="md">
  <h3>MD Pediatrics</h3>
  <p>Specialize in the medical care of children, focusing on pediatric diseases, vaccination, and child healthcare.</p>
</div>
<div class="course-col" id="md">
  <h3>MD Dermatology</h3>
  <p>Focus on the diagnosis and treatment of skin disorders, diseases, and cosmetic concerns.</p>
</div>
<div class="course-col" id="md">
  <h3>MD Obstetrics and Gynecology</h3>
  <p>Specialize in female reproductive health, childbirth, and surgical techniques related to obstetrics and gynecology.</p>
</div>
<div class="course-col" id="md">
  <h3>MD Psychiatry</h3>
  <p>Focus on mental health disorders, treatment methods, and psychological counseling to diagnose and treat psychiatric conditions.</p>
</div>
<div class="course-col" id="md">
  <h3>MD Anesthesiology</h3>
  <p>Specialize in anesthesia care, pain management, and critical care during surgeries and procedures.</p>
</div>
<div class="course-col" id="md">
  <h3>MD General Surgery</h3>
  <p>Focus on performing surgical procedures, patient recovery, and post-operative care for a range of medical conditions.</p>
</div>
<div class="course-col" id="ca">
  <h3>CA Foundation</h3>
  <p>Build the foundational knowledge of accounting, law, economics, and business for aspiring Chartered Accountants.</p>
</div>
<div class="course-col" id="ca">
  <h3>CA Intermediate</h3>
  <p>Advance your expertise in accounting, taxation, and auditing to further prepare for the Chartered Accountancy profession.</p>
</div>
<div class="course-col" id="ca">
  <h3>CA Final</h3>
  <p>Master advanced subjects in taxation, auditing, and financial management to complete the CA qualification.</p>
</div>
<div class="course-col" id="cma">
  <h3>CMA Foundation</h3>
  <p>Learn the fundamentals of cost management, financial accounting, and business law as the starting point for CMA qualification.</p>
</div>
<div class="course-col" id="cma">
  <h3>CMA Intermediate</h3>
  <p>Develop advanced skills in management accounting, financial management, and cost control techniques for business strategy.</p>
</div>
<div class="course-col" id="cma">
  <h3>CMA Final</h3>
  <p>Master complex topics like advanced management accounting, strategic financial management, and professional ethics to become a CMA.</p>
</div>
<div class="course-col" id="cs">
  <h3>CS Foundation</h3>
  <p>Get started with the basics of company law, business laws, and economic principles as a foundation for the CS profession.</p>
</div>
<div class="course-col" id="cs">
  <h3>CS Executive</h3>
  <p>Deepen your understanding of corporate governance, company law, securities law, and corporate financial management in the CS course.</p>
</div>
<div class="course-col" id="cs">
  <h3>CS Professional</h3>
  <p>Specialize in advanced areas of corporate governance, mergers, and acquisitions, and develop expertise to practice as a Company Secretary.</p>
</div>
<div class="course-col" id="pgdm">
  <h3>PGDM General Management</h3>
  <p>Learn the skills needed to manage organizations, make strategic decisions, and lead teams in diverse business environments.</p>
</div>
<div class="course-col" id="pgdm">
  <h3>PGDM Marketing</h3>
  <p>Specialize in marketing strategies, consumer behavior, and digital marketing for careers in business development and brand management.</p>
</div>
<div class="course-col" id="pgdm">
  <h3>PGDM Finance</h3>
  <p>Gain expertise in financial management, investment strategies, and corporate finance to succeed in the financial industry.</p>
</div>
<div class="course-col" id="pgdm">
  <h3>PGDM HRM (Human Resource Management)</h3>
  <p>Develop skills in talent acquisition, employee engagement, and organizational behavior to manage human resources effectively.</p>
</div>
<div class="course-col" id="dpharm">
  <h3>DPharm General Pharmacy</h3>
  <p>Learn the fundamentals of pharmaceutical sciences, drug formulations, and clinical pharmacy practices to work in healthcare.</p>
</div>
<div class="course-col" id="dpharm">
  <h3>DPharm Pharmaceutical Chemistry</h3>
  <p>Study chemical principles, drug synthesis, and formulations to contribute to pharmaceutical research and manufacturing.</p>
</div>
<div class="course-col" id="dpharm">
  <h3>DPharm Clinical Pharmacy</h3>
  <p>Specialize in patient care, medication management, and therapeutic interventions to enhance healthcare outcomes.</p>
</div>
<div class="course-col" id="bpharm">
  <h3>BPharm General Pharmacy</h3>
  <p>Study the fundamentals of pharmacy, drug interactions, and therapeutic management to prepare for a career in healthcare.</p>
</div>
<div class="course-col" id="bpharm">
  <h3>BPharm Pharmaceutical Chemistry</h3>
  <p>Learn about the chemistry of drugs, drug design, and synthesis processes for careers in pharmaceutical research and industry.</p>
</div>
<div class="course-col" id="bpharm">
  <h3>BPharm Clinical Pharmacy</h3>
  <p>Develop expertise in patient medication management, pharmacy ethics, and healthcare regulations for working in hospitals and clinics.</p>
</div>
<div class="course-col" id="bpharm">
  <h3>BPharm Pharmacology</h3>
  <p>Focus on the study of drug actions, therapeutic uses, and drug toxicity to prepare for a career in pharmacology and toxicology.</p>
</div>
    </div>
    
    </section>
    

  
    
    </div>
  </section>

    <!-- footerll -->

    <section class="footer">
      <h4>About US</h4>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil saepe <br>
        sunt, sequi vero culpa aperiam ad nemo consequuntur debitis eius!
      </p>
      <div class="icons">
        <i class='bx bxl-facebook-circle'></i>
        <i class='bx bxl-twitter'></i>
        <i class='bx bxl-instagram'></i>
        <i class='bx bxl-linkedin-square' ></i>
      </div>
      <p>Made with by <i class='bx bx-heart' ></i> NK</p>
    </section>

    <script src="script.js"></script>
  </body>
</html>