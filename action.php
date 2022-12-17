<script src="dist/js/bootstrap.bundle.min.js"></script>
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/Style.css" rel="stylesheet">

<h1>ChatGPT Result</h1>
<div class="Result">
<textarea id="ResultArea" name="Result">
<?php

$TEXT = $_POST['text'];
$API_KEY = 'Test';

$SampleText = '- Gitとは、バージョン管理システムの1つで、コンピュータファイルを変更履歴を記録して保存することができます。 
			   - Gitを使用するためには、GitHubアカウントを作成する必要があります。 
			   - ファイルの作成・編集後に、Gitリポジトリにプッシュ（保存）します。 
			   - 既存のファイルの情報を取得したい場合は、git clone コマンドでローカルにクローン（コピー）します。 
			   - 変更履歴の確認や再利用などが行えるようになります。 
			   - git status コマンドでブランチの各状態を確認したり、git log コマンドで変更履歴の表示が行えます。 
			   - ローカルからリモート(GitHub)へプッシュ(アップロード)されたファイルは、 git push コマンドを使って行います。';

$header = array(
	'Authorization: Bearer '.$API_KEY,
	'Content-type: application/json',
);

$params = json_encode(array(
	'prompt'		=> $TEXT,
	'model'			=> 'text-davinci-003',
	'temperature'	=> 0.7,
	'max_tokens'	=> 4000,
	'top_p'			=> 1.0,
	'frequency_penalty'	=> 0.8,
	'presence_penalty'	=> 0.0
));


$curl = curl_init('https://api.openai.com/v1/completions');
$options = array(
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER =>$header,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_RETURNTRANSFER => true,
);
curl_setopt_array($curl, $options);
$response = curl_exec($curl);

$httpcode = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);

if (200 == $httpcode){
	$json_array = json_decode($response, true);
	$choices = $json_array['choices'];
	foreach($choices as $v){
		echo $v['text'];
	}
}
else {
	echo $SampleText;
}
?>

</textarea>
<button id="Copy" type="button" class="btn btn-primary">Copy</button>
</div>

<script src="js/copy.js"></script>
