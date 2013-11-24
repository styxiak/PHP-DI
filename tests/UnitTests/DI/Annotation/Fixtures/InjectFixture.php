<?php
/**
 * PHP-DI
 *
 * @link      http://php-di.org/
 * @copyright Matthieu Napoli (http://mnapoli.fr/)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace UnitTests\DI\Annotation\Fixtures;

use DI\Annotation\Inject;

class InjectFixture
{
    /**
     * @Inject("foo")
     */
    protected $property1;

    /**
     * @Inject
     * @var InjectableFixture
     */
    protected $property2;

    /**
     * @Inject(name="foo")
     */
    protected $property3;

    /**
     * @Inject
     */
    public function method1()
    {
    }

    /**
     * @Inject({"foo", "bar"})
     */
    public function method2($str1, $str2)
    {
    }
}
