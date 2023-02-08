<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api-sandbox-limit-digimason.axxispay.com.br/v2/users/auth',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"email":"admin@cardban.com.br",
	"password":"102030"
}
',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI3IiwianRpIjoiNGQ0MDg5OTY0NTNkNjhhMTFjYThiNzY0YzEyMjY3NjI0OTdiOWFjOTM0MTQwMDgwZjhkOTQwZTNkM2I5Y2U5MjA4N2EwMWIzZjZkYTIwZDciLCJpYXQiOjE2NzU3NzY0NjYuODQxMDc4LCJuYmYiOjE2NzU3NzY0NjYuODQxMDgyLCJleHAiOjE2NzU4NjI4NjYuODMzMDI2LCJzdWIiOiIiLCJzY29wZXMiOlsicGFydG5lciJdfQ.ZpSQ0mC9ZpnWkms0d19hw47wWc6bvMOv2ZjtEkiNCQQDhQ4qjQ2A4Q3WFlEswWdSbK3q8671wF1DC26zd9BRUgJcgozOQnBlHu1kGRk3g2noDY5nen1kEnToiSM4FxPdVKNq_FNJyMsrzUtLslW1DGncjThwzhrHzSz3us5R7flJ9XjTOo5-qyexELkK1HTgGhIgkr4x12nFh6FJRaU-5wgwaGn-rS0DGw09b3VaZyjt9QEsBn_JYUeIvzPAaLJesovjdSpuSqoC5Ds7HLmWNBi4Qt2KeaZFhUzHFxeBwN9ErspidrVliAuqRs-8cmTWfj4gasubf_lWR7zUtpoMM9d5O7ctB-BL2r4r_p94gq43NkfWIjtv1rODYLHDin6n2WfgS6YFYBVxJKr9DjdAesGIKiUpv1U0urkVitQLcZW3OOH8m5TPvIQVYmM67j-kr7clnGvUyMl5tRWx8KalFglCbvFUUN1bkC2zWypCpCaMxBIoJhXQ8XgL_UDq5uHGZ3lZwjJ3ZPTSVp-ZQdvEla0ql1xT4ROEHPKryhKtghpt1iEgo0MU2qn76dSjiB5eSxRclT-ODpksN0nN7LCIzYBT7AvgJ0xpM4VfirR1q2R_vDJBmoXf29i6OttzB0TaI8f-uT4Dhm7N9JxHFwgruWMRxe1A1DCpmiqStaweiUA'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
