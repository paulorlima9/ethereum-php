<?php
/**
 * @file
 * This is a file generated by scripts/generate-complex-datatypes.php.
 *
 * DO NOT EDIT THIS FILE.
 *
 * @ingroup generated
 * @ingroup dataTypesComplex
 */

namespace Ethereum\DataType;

/**
 * Ethereum data type SHHFilterChange.
 *
 * Generated by scripts/generate-complex-datatypes.php based on resources/ethjs-schema.json.
 */
class SHHFilterChange extends EthDataType
{
    /**
     * Value for 'hash'.
     */
    public $hash;

    /**
     * Value for 'from'.
     */
    public $from;

    /**
     * Value for 'to'.
     */
    public $to;

    /**
     * Value for 'expiry'.
     */
    public $expiry;

    /**
     * Value for 'ttl'.
     */
    public $ttl;

    /**
     * Value for 'sent'.
     */
    public $sent;

    /**
     * Value for 'topics'.
     */
    public $topics;

    /**
     * Value for 'payload'.
     */
    public $payload;

    /**
     * Value for 'workProved'.
     */
    public $workProved;

    /**
     * @param  EthD  $hash
     * @param  EthD  $from
     * @param  EthD  $to
     * @param  EthQ  $expiry
     * @param  EthQ  $ttl
     * @param  EthQ  $sent
     * @param  array  $topics Array of EthD
     * @param  EthD  $payload
     * @param  EthQ  $workProved
     */
    public function __construct(EthD $hash = null, EthD $from = null, EthD $to = null, EthQ $expiry = null, EthQ $ttl = null, EthQ $sent = null, array $topics = null, EthD $payload = null, EthQ $workProved = null)
    {
        $this->hash = $hash;
        $this->from = $from;
        $this->to = $to;
        $this->expiry = $expiry;
        $this->ttl = $ttl;
        $this->sent = $sent;
        $this->topics = $topics;
        $this->payload = $payload;
        $this->workProved = $workProved;
    }

    /**
     * Returns a name => type array.
     */
    public static function getTypeArray()
    {
        return [
            'hash' => 'EthD',
            'from' => 'EthD',
            'to' => 'EthD',
            'expiry' => 'EthQ',
            'ttl' => 'EthQ',
            'sent' => 'EthQ',
            'topics' => '[EthD]',
            'payload' => 'EthD',
            'workProved' => 'EthQ',
        ];
    }

    /**
     * Returns array with values.
     */
    public function toArray()
    {
        $return = [];
        (! is_null($this->hash)) ? $return['hash'] = $this->hash->hexVal() : null;
        (! is_null($this->from)) ? $return['from'] = $this->from->hexVal() : null;
        (! is_null($this->to)) ? $return['to'] = $this->to->hexVal() : null;
        (! is_null($this->expiry)) ? $return['expiry'] = $this->expiry->hexVal() : null;
        (! is_null($this->ttl)) ? $return['ttl'] = $this->ttl->hexVal() : null;
        (! is_null($this->sent)) ? $return['sent'] = $this->sent->hexVal() : null;
        (! is_null($this->topics)) ? $return['topics'] = Ethereum::valueArray($this->topics, 'EthD') : [];
        (! is_null($this->payload)) ? $return['payload'] = $this->payload->hexVal() : null;
        (! is_null($this->workProved)) ? $return['workProved'] = $this->workProved->hexVal() : null;

        return $return;
    }
}
