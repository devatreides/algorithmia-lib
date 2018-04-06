<?php

namespace Algorithmia;

/**
 * Represents an Algorithmia algorithm that can call on a user's behalf.
 */
class Algorithm {

    /**
     * Client we use to make API calls to the algorithm.
     * @var Algorithmia/Client $client
     */
    private $client;

    /**
     * URL to our algorithm.
     * @var string $algoUrl
     */
    private $algoUrl;

    /**
     * Construct the Algorithmia/Algorithm
     * @param string $in_algo
     * @param Algorithmia\Client $client
     */
    public function __construct(string $in_algo, Client $in_client = null)
    {
        $this->client = $in_client;
        $this->algoUrl = $in_algo;
    }

    /**
     * Execute an API call for this Algorithm
     * @param mixed $in_input The input to send to the algorithm.
     */
    public function pipe($in_input) 
    {
        return $this->client->doSynchronousCall($this->algoUrl, $in_input);
    }



}