<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ذكاء إماراتي</title>
  <style>
    body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #f0f4ff, #e6f0ff);
      color: #2c3e50;
      font-size: 20px;
    }
    header {
      background: linear-gradient(45deg, #004C97, #007BFF);
      color: #fff;
      padding: 40px 20px 20px 20px;
      text-align: center;
      position: relative;
    }
    header h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }
    .scroll-banner {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background: transparent;
      padding: 8px 0;
      font-size: 18px;
      font-weight: bold;
      overflow: hidden;
    }
    .scroll-banner span {
      display: inline-block;
      white-space: nowrap;
      color: #fff;
      animation: scrollText 12s linear infinite;
    }
    @keyframes scrollText {
      from { transform: translateX(100%); }
      to { transform: translateX(-100%); }
    }
    .nav-scroll {
      background-color: #003366;
      overflow: hidden;
      height: 40px;
      position: relative;
    }
    .nav-scroll .scrolling-wrapper {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }
    .nav-scroll .scrolling-text {
      position: absolute;
      white-space: nowrap;
      color: white;
      font-size: 20px;
      font-weight: bold;
      animation: scrollTextLine 24s linear infinite;
    }
    @keyframes scrollTextLine {
      from { right: -100%; }
      to { right: 100%; }
    }
    .card {
      background-color: #eaf2ff;
      border: 2px solid #007BFF;
      border-radius: 20px;
      padding: 30px;
      margin: 30px auto;
      max-width: 900px;
      text-align: right;
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
    }
   .card h2 {
      color: #004C97;
      font-size: 30px;
      margin-bottom: 15px;
      text-align: center;
    }
    .card p {
      font-size: 20px;
      color: #333;
      line-height: 1.8;
      margin: 0;
    }
    main {
  padding: 40px 20px;
  max-width: 1000px;
  margin: auto;
  background: white;
  border-radius: 20px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}
    .section {
      margin-bottom: 40px;
    }
    h2 {
      color: #004C97;
      margin-bottom: 20px;
    }
    ul {
      line-height: 2;
      padding-right: 20px;
    }
    .robot-button {
  background: #004C97;
  color: white;
  border: none;
  padding: 15px 30px;
  font-size: 18px;
  border-radius: 50px;
  cursor: pointer;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  gap: 10px;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
}

.robot-button img {
  width: 30px;
  height: 30px;
}

#smart-assistant {
  background-color: #eef6ff;
  padding: 25px;
  border-radius: 15px;
  margin-top: 40px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

#chatbox {
  width: 100%;
  height: 100px;
  padding: 10px;
  border: 2px solid #007BFF;
  border-radius: 10px;
  font-size: 16px;
  resize: none;
}

#micBtn, #chatBtn {
  margin-top: 10px;
  padding: 10px 20px;
  border: none;
  font-size: 16px;
  border-radius: 10px;
  cursor: pointer;
  transition: background 0.3s ease;
}

#micBtn {
  background-color: #00aa88;
  color: white;
  margin-left: 10px;
}

#chatBtn {
  background-color: #007BFF;
  color: white;
}
.modal {
  display: none;
  position: fixed;
  z-index: 1000;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(0,0,0,0.5);
  justify-content: center;
  align-items: center;
}

.modal-content {
  background: white;
  padding: 25px;
  border-radius: 12px;
  max-width: 600px;
  width: 90%;
  text-align: center;
}

.close-btn {
  position: absolute;
  top: 15px;
  left: 20px;
  font-size: 24px;
  cursor: pointer;
}
#smart-assistant {
  background-color: #eef6ff;
  padding: 25px;
  border-radius: 15px;
  margin-top: 40px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
  text-align: center;
}

#chatbox {
  width: 80%;
  min-height: 120px;
  padding: 15px 20px;
  border: 2px solid #007BFF;
  border-radius: 10px;
  font-size: 18px;
  resize: vertical;
  box-sizing: border-box;
  line-height: 1.6;
  direction: rtl;
  display: block;
  margin: auto;
}

#micBtn, #chatBtn {
  margin-top: 10px;
  padding: 10px 20px;
  border: none;
  font-size: 16px;
  border-radius: 10px;
  cursor: pointer;
  transition: background 0.3s ease;
  display: inline-block;
  margin-left: 10px;
}

#chatResponse {
  margin-top: 20px;
  width: 80%;
  margin-left: auto;
  margin-right: auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  border: 1px solid #ccc;
  font-size: 18px;
  line-height: 1.7;
  color: #333;
  text-align: right;
}
 @media (max-width: 600px) {
      header h1 {
        font-size: 22px;
      }

      .robot-button {
        font-size: 14px;
        padding: 10px 16px;
      }

      .modal-content {
        width: 90%;
        font-size: 14px;
      }

      #chatbox {
        font-size: 14px;
      }
    }
    .modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
  justify-content: center;
  align-items: center;
}

.modal-content {
  background-color: #fff;
  padding: 30px;
  border-radius: 10px;
  max-width: 500px;
  width: 90%;
  text-align: right;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

.close-btn {
  float: left;
  font-size: 24px;
  font-weight: bold;
  color: #333;
  cursor: pointer;
}
.section-button {
  display: flex;
  align-items: center;
  gap: 10px;
  background-color: #000; /* نفس لون المساعد الذكي */
  color: white;
  padding: 10px 25px;
  font-size: 18px;
  border: none;
  border-radius: 30px;
  margin: 10px 0;
  cursor: pointer;
  transition: background-color 0.3s ease;
  width: 100%;
  max-width: 280px;
}

.section-button:hover {
  background-color: #333;
}
@media (max-width: 600px) {
  #smart-assistant {
    padding: 20px 15px;
    margin: 30px auto;
  }

  #chatbox {
    font-size: 15px;
  }

  #micBtn, #chatBtn {
    width: 100%;
    margin: 10px 0;
  }
}
body {
  background-image: 
    url('https://hamdanlegalgroup.ae/wp-content/uploads/2025/06/تصميم-بدون-عنوان-13.png'),
    url('https://upload.wikimedia.org/wikipedia/commons/c/cb/Flag_of_the_United_Arab_Emirates.svg'),
    url('https://hamdanlegalgroup.ae/wp-content/uploads/2025/06/mbz-icon.png'),
    linear-gradient(rgba(240, 244, 255, 0.85), rgba(240, 244, 255, 0.85)); /* طبقة شفافة */
  
  background-repeat: repeat;
  background-size: 80px, 60px, 70px, cover;
  background-position: center;
  background-attachment: fixed;
  background-blend-mode: lighten;
  background-color: #f0f4ff;
}


  </style>
</head>
<body>
  <header>
    <h1>ذكاء إماراتي</h1>
    <p>تطبيق يُعنى بمنهج الذكاء الاصطناعي الإماراتي ويقودك نحو المستقبل</p>
  </header>

    <div class="nav-scroll">
  <div class="scrolling-wrapper">
    <span class="scrolling-text">مدرسة الرسالة المشتركة</span>
  </div>
</div>

 <div class="card">
    <h2>مستقبل الإمارات في الذكاء الاصطناعي</h2>
    <p>
      تسعى دولة الإمارات إلى أن تكون من الدول الرائدة عالميًا في مجال الذكاء الاصطناعي، من خلال تبني استراتيجيات مبتكرة تعزز الاقتصاد المعرفي وتدعم التنمية المستدامة. وتعمل الدولة على إعداد أجيال متمكنة من أدوات الذكاء الاصطناعي لبناء مستقبل ذكي يعزز جودة الحياة ويرتقي بالخدمات الحكومية والقطاعات الحيوية.
    </p>
  </div>

  <main style="display: flex; justify-content: space-between; align-items: center; gap: 40px;">
  <div style="flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <img src="12.png" alt="المساعد الذكي" style="width: 200px; max-width: 100%;" />

    <p style="font-size: 18px; color: #004C97; margin-top: 20px; text-align: center;">
      مرحبًا بك! اضغط على أي زر لاكتشاف أقسام منهج الذكاء الاصطناعي الإماراتي 🤖
    </p>
  </div>
  <div class="section-buttons">
    <button class="robot-button" onclick="openModal('goals')">
      أهداف التطبيق <img src="https://cdn-icons-png.flaticon.com/512/4712/4712038.png" alt="bot">
    </button>

    <button class="robot-button" onclick="openModal('sections')">
      الأقسام الرئيسية <img src="https://cdn-icons-png.flaticon.com/512/4712/4712038.png" alt="bot">
    </button>

    <button class="robot-button" onclick="openModal('audience')">
      الفئة المستهدفة <img src="https://cdn-icons-png.flaticon.com/512/4712/4712038.png" alt="bot">
    </button>
  </div>
</main>

<style>
@keyframes float {
  0% { transform: translateY(0); }
  50% { transform: translateY(-15px); }
  100% { transform: translateY(0); }
}
background-color: #f5f5f5; /* خلفية بيضاء رمادية */
    font-family: 'Cairo', sans-serif;
  }

  h2 {
    background-color: #000; /* أسود */
    color: white;
    padding: 15px 30px;
    border-radius: 30px;
    display: inline-block;
  }

  .submit-btn {
    background-color: #d71920; /* أحمر */
    color: white;
    border: 2px solid #b01518;
    padding: 10px 25px;
    font-weight: bold;
    border-radius: 12px;
    cursor: pointer;
    transition: 0.3s ease;
  }

  .submit-btn:hover {
    background-color: #a01012;
  }

  .mic-btn {
    background-color: #009639; /* أخضر */
    color: white;
    border: 2px solid #00792e;
    padding: 10px 25px;
    font-weight: bold;
    border-radius: 12px;
    cursor: pointer;
    transition: 0.3s ease;
  }

  .mic-btn:hover {
    background-color: #007b2d;
  }

  textarea, input {
    border: 2px solid #00792e;
    border-radius: 10px;
    padding: 12px;
    width: 100%;
  }
</style>
</main>

<style>
  .modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    justify-content: center;
    align-items: center;
  }

  .modal-content {
    background-color: #fff;
    padding: 30px;
    border-radius: 15px;
    width: 90%;
    max-width: 600px;
    text-align: right;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    position: relative;
  }

  .close-btn {
    position: absolute;
    left: 20px;
    top: 15px;
    font-size: 24px;
    font-weight: bold;
    color: #333;
    cursor: pointer;
  }

@media (max-width: 600px) {
  #micBtn, #chatBtn {
    width: 100%;
    font-size: 16px;
  }
}


</style>

<div id="smart-assistant" style="
  background: #fff;
  padding: 25px;
  margin: 40px auto;
  width: 90%;
  max-width: 1000px;
  border: 2px solid #ddd;
  border-radius: 20px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
  text-align: center;
  box-sizing: border-box;
">

  <h3 style="display: inline-flex; align-items: center; gap: 10px; background-color: #000; color: white; padding: 10px 30px; border-radius: 30px; font-size: 22px; user-select: none;">
    🤖 المساعد الذكي
  </h3>
  <label for="userType" style="font-weight: bold; display: block; margin-bottom: 8px;">اختر الفئة:</label>
<select id="userType" style="width: 80%; padding: 10px; font-size: 16px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #ccc;">
  <option value="طالب">👨‍🎓 طالب</option>
  <option value="معلم">👩‍🏫 معلم</option>
  <option value="مهتم">🌐 مهتم بالتقنية</option>
</select>

<textarea id="chatbox" placeholder="اكتب سؤالك هنا..." style="
  width: 100%;
  padding: 15px;
  border-radius: 12px;
  border: 2px solid #ccc;
  margin-top: 25px;
  font-size: 16px;
  box-sizing: border-box;
"></textarea>

 <div style="margin-top: 20px; display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; align-items: center;">
  <button id="micBtn"
          onclick="startRecognition()"
          style="background-color: #009639; color: #fff; border: none; padding: 12px 24px; border-radius: 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
    🎤 تحدث الآن
  </button>

  <button id="chatBtn"
          onclick="getReply()"
          style="background-color: #d71920; color: #fff; border: none; padding: 12px 24px; border-radius: 10px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
    📩 أرسل السؤال
  </button>

  <button id="newChatBtn"
          onclick="startNewChat()"
          style="background-color: #007bff; color: #fff; border: none; padding: 12px 24px; border-radius: 10px; font-size: 16px; cursor: pointer; display: none; transition: background-color 0.3s;">
    🗨️ محادثة جديدة
  </button>
</div>



  <div style="margin-top: 30px;">
    <button onclick="openModal('features')" style="background-color: #004C97; color: white; border: none; padding: 10px 20px; border-radius: 8px; font-size: 15px;">⚙️ عرض الوظائف الذكية</button>
  </div>

  <div id="chatResponse" style="margin-top: 20px; font-size: 17px; color: #333;"></div>
</div>
<div id="chatResponse" style="margin-top: 20px; font-size: 17px; color: #333;"></div>

<div id="chatResponse" style="margin-top: 20px; font-size: 17px; color: #333;"></div>


<!-- النوافذ المنبثقة -->
<div id="modal-goals" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal('goals')">&times;</span>
    <h3>🧠 أهداف التطبيق</h3>
    <ul>
      <li>تعليم مبادئ الذكاء الاصطناعي وفق الرؤية الوطنية</li>
      <li>تطوير مهارات الجيل الجديد في البرمجة والتفكير المنطقي</li>
      <li>تطبيقات عملية ومحاكاة لمشاريع إماراتية حقيقية</li>
    </ul>
  </div>
</div>

<div id="modal-sections" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal('sections')">&times;</span>
    <h3>📚 الأقسام الرئيسية</h3>
    <ul>
      <li>استراتيجية الإمارات للذكاء الاصطناعي</li>
      <li>تطبيقات الذكاء الاصطناعي في الدولة</li>
      <li>أساسيات تعلم الآلة والبرمجة</li>
      <li>مساعد ذكي تفاعلي</li>
      <li>مشاريع وتمارين موجهة</li>
    </ul>
  </div>
</div>

<div id="modal-audience" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal('audience')">&times;</span>
    <h3>🎯 الفئة المستهدفة</h3>
    <ul>
      <li>الطلبة</li>
      <li>المعلمون</li>
      <li>المهتمون بالتقنية في الإمارات</li>
    </ul>
  </div>
</div>

<div id="modal-features" class="modal">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal('features')">&times;</span>
    <h3>⚙️ الوظائف الذكية (Features)</h3>
    <ul>
      <li>🔍 البحث الذكي عبر الذكاء الاصطناعي</li>
      <li>🎤 إدخال صوتي وتحويل الكلام إلى نص</li>
      <li>💬 تفاعل مباشر مع مساعد ذكي باللغة العربية</li>
      <li>📄 تحليل الإجابات وعرضها بشكل مبسط</li>
      <li>🧠 دعم منهج الذكاء الاصطناعي الإماراتي في التعلم التفاعلي</li>
    </ul>
  </div>
</div>

<script>
  // فتح النافذة المنبثقة
  function openModal(id) {
    document.getElementById(`modal-${id}`).style.display = 'flex';
  }

  // إغلاق النافذة المنبثقة
  function closeModal(id) {
    document.getElementById(`modal-${id}`).style.display = 'none';
  }

  // إرسال السؤال وجلب الرد من المساعد
  async function getReply() {
    const question = document.getElementById("chatbox").value.trim();
    const responseBox = document.getElementById("chatResponse");
    const newChatBtn = document.getElementById("newChatBtn");

    if (!question) {
      responseBox.innerHTML = "❗ يرجى كتابة سؤال.";
      newChatBtn.style.display = "none";
      return;
    }

    responseBox.innerHTML = `
      <img src="12.png" alt="المساعد الذكي" style="width: 100px; height: auto; display: block; margin: auto;" />
      <span>⏳ جاري المعالجة...</span>
    `;
    newChatBtn.style.display = "none";

    try {
      const res = await fetch("chat_api.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({ question })
      });

      const data = await res.json();
      const answer = data.choices?.[0]?.message?.content || "❌ تعذر الحصول على إجابة.";

      responseBox.innerHTML = `
        <img src="12.png" alt="روبوت" style="width: 100px; height: auto; display: block; margin: auto;" />
        <span>${answer}</span>
      `;
      newChatBtn.style.display = "inline-block";

    } catch (error) {
      responseBox.innerHTML = "❌ حدث خطأ أثناء الاتصال بالخادم.";
      console.error("Fetch error:", error);
    }
  }

  // تشغيل الميكروفون والاستماع
  function startRecognition() {
    if (!('webkitSpeechRecognition' in window)) {
      alert("المتصفح لا يدعم التعرف على الصوت. يرجى استخدام Google Chrome.");
      return;
    }

    const recognition = new webkitSpeechRecognition();
    recognition.lang = 'ar-AE';
    recognition.interimResults = false;
    recognition.maxAlternatives = 1;

    const micBtn = document.getElementById("micBtn");
    micBtn.innerText = "🎙️ جاري الاستماع...";

    recognition.onerror = function(event) {
      alert("❌ حدث خطأ أثناء التعرف على الصوت: " + event.error);
    };

    recognition.onend = function() {
      micBtn.innerText = "🎤 تحدث الآن";
    };

    recognition.onresult = function(event) {
      const transcript = event.results[0][0].transcript;
      document.getElementById("chatbox").value = transcript;
      getReply(); // إرسال السؤال تلقائيًا
    };

    recognition.start();
  }

  // بدء محادثة جديدة
  function startNewChat() {
    document.getElementById("chatbox").value = "";
    document.getElementById("chatResponse").innerHTML = "";
    document.getElementById("newChatBtn").style.display = "none";
    document.getElementById("chatbox").focus();
  }
</script>


<script>
  // إغلاق النافذة عند الضغط خارج محتواها
  window.addEventListener('click', function(event) {
    const modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });
  });
</script>
<script>
  function startRecognition() {
    if (!('webkitSpeechRecognition' in window)) {
      alert("المتصفح لا يدعم هذه الميزة. استخدم Google Chrome.");
      return;
    }

    const recognition = new webkitSpeechRecognition();
    recognition.lang = 'ar-AE';
    recognition.interimResults = false;

    recognition.onresult = function(event) {
      const transcript = event.results[0][0].transcript;
      document.getElementById("chatbox").value = transcript;
      getReply(); // إرسال تلقائي
    };

    recognition.onerror = function(event) {
      alert("حدث خطأ أثناء الاستماع: " + event.error);
    };

    recognition.start();
  }
</script>

</body>
</html>
