<?php

namespace Genesizadmin\GenesizCore\Domain\Enums;

enum StyleType : string {
    case Success = 'success';
    case Info = 'info';
    case Warning = 'warning';
    case Error = 'error';
}
