<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $experience = $_POST['experience'];
    $education = $_POST['education'];
    $skills = $_POST['skills'];

    $prompt = "Generate a professional resume in HTML format for the following details:\n\n"
            . "Name: $name\nEmail: $email\nTitle: $title\nSummary: $summary\nExperience: $experience\nEducation: $education\nSkills: $skills\n";

    $data = [
        'model' => 'gpt-3.5-turbo',
        'messages' => [
            ['role' => 'system', 'content' => 'You are a resume writing assistant.'],
            ['role' => 'user', 'content' => $prompt]
        ]
    ];

    $ch = curl_init('https://api.openai.com/v1/chat/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $openai_api_key
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        die('Curl error: ' . curl_error($ch));
    }
    curl_close($ch);

    $result = json_decode($response, true);
    $content = $result['choices'][0]['message']['content'] ?? 'Error generating resume.';

    $stmt = $pdo->prepare("INSERT INTO resumes (name, email, html, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->execute([$name, $email, $content]);

    echo "<div style='padding: 2rem;'>$content</div>";
    echo "<div style='text-align:center; margin-top:2rem'><a href='index.php'>Back to Builder</a></div>";
}
?>