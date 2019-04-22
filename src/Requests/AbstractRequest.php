<?php

namespace Vox\VoxSignatureCloud\Requests;

use Vox\VoxSignatureCloud\Exception\SignatureCloudException;

abstract class AbstractRequest
{
    /**
     * @param string $url
     * @param array $data
     * @return mixed
     */
    protected function sendGet(string $url, array $data = [])
    {
        $curl = curl_init();

        $data = http_build_query($data);

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => "$url?$data"
        ]);

        $response = json_decode(curl_exec($curl));
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if (!in_array($statusCode, [200, 201])) {
            throw new SignatureCloudException(
                $response->detail->message,
                $response->detail->code,
                $response->detail->options ?? []
            );
        }

        curl_close($curl);

        return $response;
    }

    /**
     * @param string $url
     * @param array $data
     * @return mixed
     */
    protected function sendPost(string $url, array $data = [])
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data
        ]);

        $response = json_decode(curl_exec($curl));
        $response->status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if (!in_array($statusCode, [200, 201])) {
            throw new SignatureCloudException(
                $response->detail->message,
                $response->detail->code,
                $response->detail->options ?? []
            );
        }

        curl_close($curl);

        return $response;
    }
}
