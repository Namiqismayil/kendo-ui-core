<?php

namespace Kendo\Dataviz\UI;

class StockChartTooltipBorder extends \Kendo\SerializableObject {
//>> Properties

    public function color($value) {
        return $this->setProperty('color', $value);
    }

    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
