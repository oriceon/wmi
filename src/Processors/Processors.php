<?php

namespace Oriceon\Wmi\Processors;

use Oriceon\Wmi\Models\Variants\Processor;
use Oriceon\Wmi\Schemas\Classes;

class Processors extends AbstractProcessor
{
    /**
     * Returns all processors on the computer.
     *
     * @return array
     */
    public function get()
    {
        $processors = [];

        $result = $this->connection->newQuery()->from(Classes::WIN32_PROCESSOR)->get();

        foreach($result as $processor) {
            $processors[] = new Processor($processor);
        }

        return $processors;
    }
}
