<?php

namespace Ethereum;

use Ethereum\DataType\EthB;

/**
 * EthereumStaticTestEthB
 *
 * @ingroup staticTests
 */
class EthereumStaticTestEthB extends TestStatic
{
    /**
     * Init with ABI.
     *
     * @ingroup PrimitiveDataType
     */
    public function testEthB__int_with_abi()
    {
        $x = new EthB(1, ['abi' => 'bool']);
        $this->assertSame($x->getSchemaType(), 'B');
        $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000001');
        $this->assertSame($x->val(), true);
    }

    /**
     * Int to bool.
     *
     * @ingroup PrimitiveDataType
     */
    public function testEthB__int()
    {
        $x = new EthB(1);
        $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000001');
        $this->assertSame($x->val(), true);
    }

    /**
     * Int null to bool..
     *
     * @ingroup PrimitiveDataType
     */
    public function testEthB__int_null()
    {
        $x = new EthB(0);
        $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000000');
        $this->assertSame($x->val(), false);
    }

    /**
     * Hex bool to true.
     *
     * @ingroup PrimitiveDataType
     */
    public function testEthB__bool_true()
    {
        $x = new EthB(true, ['abi' => 'bool']);

        $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000001');
        $this->assertSame($x->val(), true);
    }

    /**
     * Hex bool to false.
     *
     * @ingroup PrimitiveDataType
     */
    public function testEthB__bool_false()
    {
        $x = new EthB(false, ['abi' => 'bool']);
        $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000000');
        $this->assertSame($x->val(), false);
    }

    /**
     * Hex false to false.
     *
     * @ingroup PrimitiveDataType
     */
    public function testEthB__hex_false()
    {
        $x = new EthB('0x0000000000000000000000000000000000000000000000000000000000000000');
        $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000000');
        $this->assertSame($x->val(), false);
    }

    /**
     * Hex true to true.
     *
     * @ingroup PrimitiveDataType
     */
    public function testEthB__hex_TRUE()
    {
        $x = new EthB('0x0000000000000000000000000000000000000000000000000000000000000001', ['abi' => 'bool']);
        $this->assertSame($x->hexVal(), '0x0000000000000000000000000000000000000000000000000000000000000001');
        $this->assertSame($x->val(), true);
    }
}
