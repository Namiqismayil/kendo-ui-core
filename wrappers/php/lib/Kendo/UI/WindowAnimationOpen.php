<?php

namespace Kendo\UI;

class WindowAnimationOpen extends \Kendo\SerializableObject {
//>> Properties

    public function effects($value) {
        return $this->setProperty('effects', $value);
    }

    public function duration($value) {
        return $this->setProperty('duration', $value);
    }

//<< Properties
}

?>
