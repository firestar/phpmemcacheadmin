<?php
return array (
  'stats_api' => 'Server',
  'slabs_api' => 'Server',
  'items_api' => 'Server',
  'get_api' => 'Server',
  'set_api' => 'Server',
  'delete_api' => 'Server',
  'flush_all_api' => 'Server',
  'connection_timeout' => '1',
  'max_item_dump' => '100',
  'refresh_rate' => 2,
  'memory_alert' => '80',
  'hit_rate_alert' => '90',
  'eviction_alert' => '0',
  'file_path' => 'Temp/',
  'servers' =>
  array (
    'Default' =>
    array (
      getenv("MEMCACHE_HOST").getenv("MEMCACHE_PORT") =>
      array (
        'hostname' => getenv("MEMCACHE_HOST"),
        'port' => getenv("MEMCACHE_PORT"),
      ),
    ),
  ),
);
