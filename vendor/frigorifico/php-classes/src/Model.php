<?php

    namespace frigorifico;

    class Model {
        private $values = [];
        public function __call($name, $args)
        {
            $method = substr($name, 0, 3);
            $filtdName = substr($name, 3, strlen($name));

            switch ($method)
            {
                case "get":
                    return $this->values[$filtdName];
                    break;
                case "set":
                    return $this->values[$filtdName] = $args[0];
                    break;
            }
        }
        public function setData($data = array())
        {
            foreach($data as $key => $value)
            {
                $this->{"set".$key}($value);
            }
        }
        public function getValues()
        {
            return $this->values;
        }
    }

?>