<?php
$api_key = include('key.php');

$input = json_decode(file_get_contents('php://input'), true);
$fullInput = $input['question'] ?? '';

$user_type = 'عام';
$clean_question = $fullInput;

// تحديد الفئة من السؤال (مسبقًا من الجافا سكربت)
if (strpos($fullInput, 'طالب:') === 0) {
    $user_type = 'طالب';
    $clean_question = trim(str_replace('طالب:', '', $fullInput));
} elseif (strpos($fullInput, 'معلم:') === 0) {
    $user_type = 'معلم';
    $clean_question = trim(str_replace('معلم:', '', $fullInput));
} elseif (strpos($fullInput, 'مهتم:') === 0) {
    $user_type = 'مهتم';
    $clean_question = trim(str_replace('مهتم:', '', $fullInput));
}

// إعداد التعليمات المخصصة حسب الفئة
$instruction = '';
switch ($user_type) {
  case 'طالب':
    $instruction = 'أجب بطريقة مبسطة وسهلة الفهم لأن المستخدم طالب.';
    break;
  case 'معلم':
    $instruction = 'أجب بطريقة تعليمية تساعد المعلم في الشرح.';
    break;
  case 'مهتم':
    $instruction = 'أجب بطريقة معلوماتية عامة تناسب الجمهور المهتم.';
    break;
  default:
    $instruction = 'أجب بطريقة واضحة باللغة العربية للمستخدم العام.';
    break;
}

$system_message = [
  'role' => 'system',
  'content' => $instruction
];


$headers = [
    "Content-Type: application/json",
    "Authorization: Bearer $api_key"
];

$data = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        $system_message,
        ['role' => 'user', 'content' => $clean_question]
    ]
];

$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => implode("\r\n", $headers),
        'content' => json_encode($data)
    ]
];

$context = stream_context_create($options);
$response = file_get_contents('https://api.openai.com/v1/chat/completions', false, $context);

header('Content-Type: application/json');
echo $response;
