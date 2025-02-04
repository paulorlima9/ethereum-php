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
 * Ethereum data type EstimateTransaction.
 *
 * Generated by scripts/generate-complex-datatypes.php based on resources/ethjs-schema.json.
 */
class EstimateTransaction extends EthDataType
{
    /**
     * Value for 'from'.
     */
    public $from;

    /**
     * Value for 'to'.
     */
    public $to;

    /**
     * Value for 'gas'.
     */
    public $gas;

    /**
     * Value for 'gasPrice'.
     */
    public $gasPrice;

    /**
     * Value for 'value'.
     */
    public $value;

    /**
     * Value for 'data'.
     */
    public $data;

    /**
     * Value for 'nonce'.
     */
    public $nonce;

    /**
     * @param  EthD20  $from
     * @param  EthD20  $to
     * @param  EthQ  $gas
     * @param  EthQ  $gasPrice
     * @param  EthQ  $value
     * @param  EthD  $data
     * @param  EthQ  $nonce
     */
    public function __construct(EthD20 $from = null, EthD20 $to = null, EthQ $gas = null, EthQ $gasPrice = null, EthQ $value = null, EthD $data = null, EthQ $nonce = null)
    {
        $this->from = $from;
        $this->to = $to;
        $this->gas = $gas;
        $this->gasPrice = $gasPrice;
        $this->value = $value;
        $this->data = $data;
        $this->nonce = $nonce;
    }

    /**
     * Returns a name => type array.
     */
    public static function getTypeArray()
    {
        return [
            'from' => 'EthD20',
            'to' => 'EthD20',
            'gas' => 'EthQ',
            'gasPrice' => 'EthQ',
            'value' => 'EthQ',
            'data' => 'EthD',
            'nonce' => 'EthQ',
        ];
    }

    /**
     * Returns array with values.
     */
    public function toArray()
    {
        $return = [];
        (! is_null($this->from)) ? $return['from'] = $this->from->hexVal() : null;
        (! is_null($this->to)) ? $return['to'] = $this->to->hexVal() : null;
        (! is_null($this->gas)) ? $return['gas'] = $this->gas->hexVal() : null;
        (! is_null($this->gasPrice)) ? $return['gasPrice'] = $this->gasPrice->hexVal() : null;
        (! is_null($this->value)) ? $return['value'] = $this->value->hexVal() : null;
        (! is_null($this->data)) ? $return['data'] = $this->data->hexVal() : null;
        (! is_null($this->nonce)) ? $return['nonce'] = $this->nonce->hexVal() : null;

        return $return;
    }
}
