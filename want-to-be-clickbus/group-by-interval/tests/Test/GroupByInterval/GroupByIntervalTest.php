<?php

namespace Mvieira\GroupByInterval;

class GroupByIntervalTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @dataProvider providerForValidRangeAndNumberSet
   */
  public function testValidRangeAndNumberSet($range, $numberSet, $expected)
  {
    $orderedSet = (new GroupByInterval($range, $numberSet))->orderSet();
    $this->assertEquals($orderedSet, $expected);
  }

  public function providerForValidRangeAndNumberSet()
  {
    return array(
      [3, [5], [[5]]],
      /*
      [1, [5, 19, 302, 134, -23, 54], [[-23], [5], [19], [54], [134], [302]]],
      [10, [10, 1, -20, 14, 99, 136, 19, 20, 117, 22, 93, 120, 131], [[-20], [1, 10], [14, 19, 20], [22], [93, 99], [117, 120], [131, 136]]],
      [15, [10, 1, -20, 14, 99, 136, 19, 20, 117, 22, 93, 120, 131], [[-20], [1, 10, 14], [19, 20, 22], [93, 99], [117, 120], [131], [136]]],
      [5, [10, 1, -20, 14, 99, 136, 19, 20, 117, 22, 96, 120, 15], [[-20], [1], [10], [14, 15], [19, 20], [22], [96, 99], [117, 120], [136]]],
      [null, [], []]
       */
    );
  }
}

?>
