<?php declare(strict_types = 1);

// ftm-/app/app/Services/Trading/OrderService.php
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v6-2.3.5',
   'data' => 
  array (
    0 => 
    array (
      '9fbe666f70617f9de0dcfd914e10883d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Services\\Trading',
         'uses' => 
        array (
          'orderfulfilled' => 'App\\Events\\OrderFulfilled',
          'orderpaid' => 'App\\Events\\OrderPaid',
          'orderrefunded' => 'App\\Events\\OrderRefunded',
          'insufficientfundsexception' => 'App\\Exceptions\\InsufficientFundsException',
          'orderconflictexception' => 'App\\Exceptions\\OrderConflictException',
          'feevariant' => 'App\\Features\\FeeVariant',
          'inventoryitem' => 'App\\Models\\InventoryItem',
          'listing' => 'App\\Models\\Listing',
          'order' => 'App\\Models\\Order',
          'user' => 'App\\Models\\User',
          'ledgerservice' => 'App\\Services\\Money\\LedgerService',
          'tradeprovider' => 'App\\Services\\Steam\\TradeProvider',
          'db' => 'Illuminate\\Support\\Facades\\DB',
          'feature' => 'Laravel\\Pennant\\Feature',
        ),
         'className' => 'App\\Services\\Trading\\OrderService',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '9da30dcb020d77c25bc2d2874d723b99' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Services\\Trading',
         'uses' => 
        array (
          'orderfulfilled' => 'App\\Events\\OrderFulfilled',
          'orderpaid' => 'App\\Events\\OrderPaid',
          'orderrefunded' => 'App\\Events\\OrderRefunded',
          'insufficientfundsexception' => 'App\\Exceptions\\InsufficientFundsException',
          'orderconflictexception' => 'App\\Exceptions\\OrderConflictException',
          'feevariant' => 'App\\Features\\FeeVariant',
          'inventoryitem' => 'App\\Models\\InventoryItem',
          'listing' => 'App\\Models\\Listing',
          'order' => 'App\\Models\\Order',
          'user' => 'App\\Models\\User',
          'ledgerservice' => 'App\\Services\\Money\\LedgerService',
          'tradeprovider' => 'App\\Services\\Steam\\TradeProvider',
          'db' => 'Illuminate\\Support\\Facades\\DB',
          'feature' => 'Laravel\\Pennant\\Feature',
        ),
         'className' => 'App\\Services\\Trading\\OrderService',
         'functionName' => '__construct',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'App\\Services\\Trading',
           'uses' => 
          array (
            'orderfulfilled' => 'App\\Events\\OrderFulfilled',
            'orderpaid' => 'App\\Events\\OrderPaid',
            'orderrefunded' => 'App\\Events\\OrderRefunded',
            'insufficientfundsexception' => 'App\\Exceptions\\InsufficientFundsException',
            'orderconflictexception' => 'App\\Exceptions\\OrderConflictException',
            'feevariant' => 'App\\Features\\FeeVariant',
            'inventoryitem' => 'App\\Models\\InventoryItem',
            'listing' => 'App\\Models\\Listing',
            'order' => 'App\\Models\\Order',
            'user' => 'App\\Models\\User',
            'ledgerservice' => 'App\\Services\\Money\\LedgerService',
            'tradeprovider' => 'App\\Services\\Steam\\TradeProvider',
            'db' => 'Illuminate\\Support\\Facades\\DB',
            'feature' => 'Laravel\\Pennant\\Feature',
          ),
           'className' => 'App\\Services\\Trading\\OrderService',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '5aea9769c142b2e54eb8dd7e6e5d2684' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Services\\Trading',
         'uses' => 
        array (
          'orderfulfilled' => 'App\\Events\\OrderFulfilled',
          'orderpaid' => 'App\\Events\\OrderPaid',
          'orderrefunded' => 'App\\Events\\OrderRefunded',
          'insufficientfundsexception' => 'App\\Exceptions\\InsufficientFundsException',
          'orderconflictexception' => 'App\\Exceptions\\OrderConflictException',
          'feevariant' => 'App\\Features\\FeeVariant',
          'inventoryitem' => 'App\\Models\\InventoryItem',
          'listing' => 'App\\Models\\Listing',
          'order' => 'App\\Models\\Order',
          'user' => 'App\\Models\\User',
          'ledgerservice' => 'App\\Services\\Money\\LedgerService',
          'tradeprovider' => 'App\\Services\\Steam\\TradeProvider',
          'db' => 'Illuminate\\Support\\Facades\\DB',
          'feature' => 'Laravel\\Pennant\\Feature',
        ),
         'className' => 'App\\Services\\Trading\\OrderService',
         'functionName' => 'buy',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'App\\Services\\Trading',
           'uses' => 
          array (
            'orderfulfilled' => 'App\\Events\\OrderFulfilled',
            'orderpaid' => 'App\\Events\\OrderPaid',
            'orderrefunded' => 'App\\Events\\OrderRefunded',
            'insufficientfundsexception' => 'App\\Exceptions\\InsufficientFundsException',
            'orderconflictexception' => 'App\\Exceptions\\OrderConflictException',
            'feevariant' => 'App\\Features\\FeeVariant',
            'inventoryitem' => 'App\\Models\\InventoryItem',
            'listing' => 'App\\Models\\Listing',
            'order' => 'App\\Models\\Order',
            'user' => 'App\\Models\\User',
            'ledgerservice' => 'App\\Services\\Money\\LedgerService',
            'tradeprovider' => 'App\\Services\\Steam\\TradeProvider',
            'db' => 'Illuminate\\Support\\Facades\\DB',
            'feature' => 'Laravel\\Pennant\\Feature',
          ),
           'className' => 'App\\Services\\Trading\\OrderService',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '5800655132dcf70051b77104bede3805' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Services\\Trading',
         'uses' => 
        array (
          'orderfulfilled' => 'App\\Events\\OrderFulfilled',
          'orderpaid' => 'App\\Events\\OrderPaid',
          'orderrefunded' => 'App\\Events\\OrderRefunded',
          'insufficientfundsexception' => 'App\\Exceptions\\InsufficientFundsException',
          'orderconflictexception' => 'App\\Exceptions\\OrderConflictException',
          'feevariant' => 'App\\Features\\FeeVariant',
          'inventoryitem' => 'App\\Models\\InventoryItem',
          'listing' => 'App\\Models\\Listing',
          'order' => 'App\\Models\\Order',
          'user' => 'App\\Models\\User',
          'ledgerservice' => 'App\\Services\\Money\\LedgerService',
          'tradeprovider' => 'App\\Services\\Steam\\TradeProvider',
          'db' => 'Illuminate\\Support\\Facades\\DB',
          'feature' => 'Laravel\\Pennant\\Feature',
        ),
         'className' => 'App\\Services\\Trading\\OrderService',
         'functionName' => 'accept',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'App\\Services\\Trading',
           'uses' => 
          array (
            'orderfulfilled' => 'App\\Events\\OrderFulfilled',
            'orderpaid' => 'App\\Events\\OrderPaid',
            'orderrefunded' => 'App\\Events\\OrderRefunded',
            'insufficientfundsexception' => 'App\\Exceptions\\InsufficientFundsException',
            'orderconflictexception' => 'App\\Exceptions\\OrderConflictException',
            'feevariant' => 'App\\Features\\FeeVariant',
            'inventoryitem' => 'App\\Models\\InventoryItem',
            'listing' => 'App\\Models\\Listing',
            'order' => 'App\\Models\\Order',
            'user' => 'App\\Models\\User',
            'ledgerservice' => 'App\\Services\\Money\\LedgerService',
            'tradeprovider' => 'App\\Services\\Steam\\TradeProvider',
            'db' => 'Illuminate\\Support\\Facades\\DB',
            'feature' => 'Laravel\\Pennant\\Feature',
          ),
           'className' => 'App\\Services\\Trading\\OrderService',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
      '0475d1a80d57217a917a89d51736b5da' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'App\\Services\\Trading',
         'uses' => 
        array (
          'orderfulfilled' => 'App\\Events\\OrderFulfilled',
          'orderpaid' => 'App\\Events\\OrderPaid',
          'orderrefunded' => 'App\\Events\\OrderRefunded',
          'insufficientfundsexception' => 'App\\Exceptions\\InsufficientFundsException',
          'orderconflictexception' => 'App\\Exceptions\\OrderConflictException',
          'feevariant' => 'App\\Features\\FeeVariant',
          'inventoryitem' => 'App\\Models\\InventoryItem',
          'listing' => 'App\\Models\\Listing',
          'order' => 'App\\Models\\Order',
          'user' => 'App\\Models\\User',
          'ledgerservice' => 'App\\Services\\Money\\LedgerService',
          'tradeprovider' => 'App\\Services\\Steam\\TradeProvider',
          'db' => 'Illuminate\\Support\\Facades\\DB',
          'feature' => 'Laravel\\Pennant\\Feature',
        ),
         'className' => 'App\\Services\\Trading\\OrderService',
         'functionName' => 'refund',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'App\\Services\\Trading',
           'uses' => 
          array (
            'orderfulfilled' => 'App\\Events\\OrderFulfilled',
            'orderpaid' => 'App\\Events\\OrderPaid',
            'orderrefunded' => 'App\\Events\\OrderRefunded',
            'insufficientfundsexception' => 'App\\Exceptions\\InsufficientFundsException',
            'orderconflictexception' => 'App\\Exceptions\\OrderConflictException',
            'feevariant' => 'App\\Features\\FeeVariant',
            'inventoryitem' => 'App\\Models\\InventoryItem',
            'listing' => 'App\\Models\\Listing',
            'order' => 'App\\Models\\Order',
            'user' => 'App\\Models\\User',
            'ledgerservice' => 'App\\Services\\Money\\LedgerService',
            'tradeprovider' => 'App\\Services\\Steam\\TradeProvider',
            'db' => 'Illuminate\\Support\\Facades\\DB',
            'feature' => 'Laravel\\Pennant\\Feature',
          ),
           'className' => 'App\\Services\\Trading\\OrderService',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => NULL,
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => NULL,
         'traitData' => NULL,
      )),
    ),
    1 => 
    array (
      '/app/app/Services/Trading/OrderService.php' => '8c805d883475a30307b2adb081558c159bacd054b4125912787f900c6235d6c8',
    ),
  ),
));