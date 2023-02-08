<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api-sandbox-limit-digimason.axxispay.com.br/v2/accessions/f54973a7-ec08-4747-bb46-c550c02aec30',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDg3OWRmZWMyMjk4ZjhhZjVkYTQ5ZjIwNTA4ZjViMjQxODg5Y2Y1YzVlYzExMDkzZDBkZDg1Yjc0OTYyYTZmM2NhM2Y4YmMwNmJiYTZlZjMiLCJpYXQiOjE2NzU3NzY1NTYuOTc3NTg1LCJuYmYiOjE2NzU3NzY1NTYuOTc3NTksImV4cCI6MTY3NTg2Mjk1Ni45NjAxMSwic3ViIjoiMSIsInNjb3BlcyI6WyJzeXN0ZW0iXX0.CvBPo9RHXhQrj7gfDelRfbc_CKT2lEWSvnZuvt4sC3Un1Tg5jAWhKx6HmVm3DBXEB4Hd9foE8y2Vh0Q4pg44UxGbRXNk47kXq2O1hdV9AwKov6vcntFrdZthJennYou77pMJT4dxSQ7vZSw6C9wA78N419SV0FBh0bnqUnDckQZQFMTg_F_aKVQj4l-MDxffvBdGTsq2jn6Ljy5l7GxIIWSd2tmsbWMN8O93COAIm04CvIZdYZbZ2zf5kGt6QCDZGDecn42NLGa-xXx0tH3B45-7kTA_km99WL2Lai3bkY2ZZtmy9OLidt6zzZmvordy1SBnMlEY_L9C82jwSrTNJd_YRUtTgUK-vezXdKChhiz-XaaXwpbmHlVswx-LmODnLShm3Eh78fllJ034YjJP3vMC8h1agYUrJzpEef9G4BQ3M7QjomhQMc_nwiVZdqZiSN3Ohx0wnxNjK1M1ImgvbT6NbHm0IbZRJz4uMsxPk3uvvVYKCBzME3YN88Z9Um61gDvPSy3PKryWEQLzfLBnsTw5yyW9LnRu_TDAiwScYGOQdeSmTQCm7xqvMm1fHb0d9z9NvdrFg0c6c06Gu_7sfoRtXU8hJm-zBVhnB0Vn4z-qiFpD7xesp2PTS-YtjxdjMSOq_oE3Pi5hzip7VpyMfcXDXWdYzkb8vg7gjb4kQt8'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
