<?php


namespace Nomess\Component\ApplicationScope;


use Nomess\Component\Cache\CacheHandlerInterface;

class ApplicationScope implements ApplicationScopeInterface
{

    private const CONFIGURATION_NAME = 'application_scope';
    private CacheHandlerInterface $cacheHandler;
    private ?array $data;

    public function __construct(CacheHandlerInterface $cacheHandler)
    {
        $this->cacheHandler = $cacheHandler;
        $this->data = $this->cacheHandler->get(self::CONFIGURATION_NAME);
        
    }
    
    
    /**
     * @param $index
     * @return bool
     */
    public function has($index): bool
    {
        return isset($this->data[$index]);
    }

    /**
     * Get data
     *
     * @param string $index
     * @return mixed|null
     */
    public function get(string $index)
    {
        return (isset($this->data[$index])) ? $this->data[$index] : NULL;
    }


    /**
     * Update data
     *
     * @param $key
     * @param $value
     * @param bool $reset
     */
    public function set($key, $value, $reset = false): void
    {
        if ($reset) {
            unset($this->data[$key]);
        }

        if (\is_array($value)) {

            foreach ($value as $keyArray => $valArray) {

                $this->data[$key][$keyArray] = $valArray;
            }

        } else {
            $this->data[$key] = $value;
        }
    }

    public function __destruct()
    {
        $this->cacheHandler->add(self::CONFIGURATION_NAME, [
            'value' => $this->data
        ]);
    }
}
