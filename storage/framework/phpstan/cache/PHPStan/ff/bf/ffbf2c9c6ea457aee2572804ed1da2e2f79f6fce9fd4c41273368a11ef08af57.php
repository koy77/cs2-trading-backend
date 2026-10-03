<?php declare(strict_types = 1);

// ftm-/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v6-2.3.5',
   'data' => 
  array (
    0 => 
    array (
      'fe35099f56131cdf507d318ec8fa3dfd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
          'TModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 2,
                'endLine' => 2,
              ),
            )),
          ),
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
      '08bf5066143ca1ddc67460ae8deb89c9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => NULL,
         'templatePhpDocNodes' => 
        array (
          'TValue' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TValue',
               'bound' => NULL,
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 2,
                'endLine' => 2,
              ),
            )),
          ),
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '211eb5e00997c3af44f6549175c3c713' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'higherorderwhenproxy' => 'Illuminate\\Support\\HigherOrderWhenProxy',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
         'typeAliasClassName' => 'Illuminate\\Support\\Traits\\Conditionable',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Support\\Traits\\Conditionable',
          3 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          4 => NULL,
        ),
      )),
      '0585935bd30fc815988631ca2bdf26bb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'higherorderwhenproxy' => 'Illuminate\\Support\\HigherOrderWhenProxy',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'when',
         'templatePhpDocNodes' => 
        array (
          'TWhenParameter' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TWhenParameter',
               'bound' => NULL,
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
          'TWhenReturnType' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TWhenReturnType',
               'bound' => NULL,
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 5,
                'endLine' => 5,
              ),
            )),
          ),
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Support\\Traits\\Conditionable',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Support\\Traits\\Conditionable',
          3 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          4 => NULL,
        ),
      )),
      '6431564418f1299e2b064764672a6bd0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => 
        array (
          'closure' => 'Closure',
          'higherorderwhenproxy' => 'Illuminate\\Support\\HigherOrderWhenProxy',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'unless',
         'templatePhpDocNodes' => 
        array (
          'TUnlessParameter' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TUnlessParameter',
               'bound' => NULL,
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
          'TUnlessReturnType' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TUnlessReturnType',
               'bound' => NULL,
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 5,
                'endLine' => 5,
              ),
            )),
          ),
        ),
         'parent' => NULL,
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Support\\Traits\\Conditionable',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Support\\Traits\\Conditionable',
          3 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          4 => NULL,
        ),
      )),
      'f124513c87bce12081562dc1fd0296e4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'chunk',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '0da67d2cff825ec2ee6f68723eb6f603' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'chunkMap',
         'templatePhpDocNodes' => 
        array (
          'TReturn' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TReturn',
               'bound' => NULL,
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '2f7163adaee52bf222166feafa6f8dd3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'each',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'df4135fb3dbecafeda651966cfc99b03' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'chunkById',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '9605d72668293f49cd2dccd74259bbd3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'chunkByIdDesc',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'f268577e21f763e8ea4144294b5329c6' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orderedChunkById',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '6ac901bc65ddd7d8a077b46713f6654c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'eachById',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'afabfb4ff160d0c444044b502cc5de77' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'lazy',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'e2840708d72d751d86d0d9701fb7562c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'lazyById',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '11ac9654edac281a2b0cd43996de4e9d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'lazyByIdDesc',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '979b45322d2e9a075c18576acb681f1f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orderedLazyById',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '60464533824f667131ff6cff0c7ca7c6' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'first',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '97e6a076ae60c30cb7a32cd6059a8769' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOrFail',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'f34dbae346396d4cb0e7a3425b7f4d2b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'baseSole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '4438c1853dddd5a2452648b895afcfc1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'paginateUsingCursor',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '0bbdcde727fd457ff31466f056f1852f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getOriginalColumnNameForCursorPagination',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '8dc87e78fd1872f7815ec7517cf66775' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'paginator',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '3d12dea2f33d8649f621442005135dcc' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'simplePaginator',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '8d120af39b96275c29325c91c65b38cd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'cursorPaginator',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '65ae99ee833316c362bc93be84640ce1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'tap',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '8135181b76faee31662d0ed4dc079597' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Concerns',
         'uses' => 
        array (
          'container' => 'Illuminate\\Container\\Container',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'cursor' => 'Illuminate\\Pagination\\Cursor',
          'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
          'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'collection' => 'Illuminate\\Support\\Collection',
          'lazycollection' => 'Illuminate\\Support\\LazyCollection',
          'str' => 'Illuminate\\Support\\Str',
          'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
          'invalidargumentexception' => 'InvalidArgumentException',
          'runtimeexception' => 'RuntimeException',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'pipe',
         'templatePhpDocNodes' => 
        array (
          'TReturn' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TReturn',
               'bound' => NULL,
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Concerns',
           'uses' => 
          array (
            'container' => 'Illuminate\\Container\\Container',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'multiplerecordsfoundexception' => 'Illuminate\\Database\\MultipleRecordsFoundException',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'recordnotfoundexception' => 'Illuminate\\Database\\RecordNotFoundException',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'cursor' => 'Illuminate\\Pagination\\Cursor',
            'cursorpaginator' => 'Illuminate\\Pagination\\CursorPaginator',
            'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'collection' => 'Illuminate\\Support\\Collection',
            'lazycollection' => 'Illuminate\\Support\\LazyCollection',
            'str' => 'Illuminate\\Support\\Str',
            'conditionable' => 'Illuminate\\Support\\Traits\\Conditionable',
            'invalidargumentexception' => 'InvalidArgumentException',
            'runtimeexception' => 'RuntimeException',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TValue' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TValue',
                 'bound' => NULL,
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
          ),
           'parent' => NULL,
           'typeAliasesMap' => 
          array (
          ),
           'bypassTypeAliases' => false,
           'constUses' => 
          array (
          ),
           'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '8a3add46d1bd234fda2776d4800f9a89' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'error' => 'Error',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
         'typeAliasClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'd63952406a75d824e6443869a286e396' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'error' => 'Error',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'forwardCallTo',
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
         'typeAliasClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '9a5e04344331d2179120b4ed4f64ccac' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'error' => 'Error',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'forwardDecoratedCallTo',
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
         'typeAliasClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '83781b0dd09d9a35763895ace0f2f52e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Support\\Traits',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'error' => 'Error',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'throwBadMethodCallException',
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
         'typeAliasClassName' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'b0e534996f5c8203cb6b539414c162dc' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'a5bfc539c71db4d54f2ac13fd7b02438' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'has',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '22cc9cf507a61a72b7d507a94ca2b10d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hasNested',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '8b7b489afeb25dc4da46a8fd45fec60c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orHas',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '286e85256e9afb77329a2d9e9484e67d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'doesntHave',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'd2f3caf00f3db94b315442618541ee17' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orDoesntHave',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '04fb5e06e9e8b88a805729a3127de188' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereHas',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '081d913a70a1545c3539e323852086ad' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withWhereHas',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '7c7a8659a7d3fa3e90c79f6dffd595b8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereHas',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '85cfc22a6855f87666be83f1eb75ad21' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereDoesntHave',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'a19c836b24fdfd4e9f0a606799323be3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereDoesntHave',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '0e57c4587c3f6179c42a842856ebdea3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hasMorph',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '38b0f69e1e96b7aa88bcafb8347719f2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getBelongsToRelation',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
          'TDeclaringModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TDeclaringModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 5,
                  'endLine' => 5,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 5,
                'endLine' => 5,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '7f56875b854c25e047b3323f9e3ea164' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orHasMorph',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '86f4a37037ac3de458212ce3793b1de2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'doesntHaveMorph',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'ca55b2c670b1a2b3da4002bedf936f18' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orDoesntHaveMorph',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'f6d29b2e9d9b350da8436b5e36549c68' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereHasMorph',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '47e5120f4abb2ec3ea63820f9527cf65' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereHasMorph',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '7e1c73aabd0cfd6a4ccb68b477a53c27' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereDoesntHaveMorph',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '9039a176387ec727ba12839d34671359' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereDoesntHaveMorph',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '2ca4e864a165862de6bfdd6ed81b507d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereRelation',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'efa401be6525c8c6d09a70915c7f75af' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withWhereRelation',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'fb2c2d260bf869587b3f065a1aaf169d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereRelation',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '8338735edc64d07a0e37f9c53b636b90' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereDoesntHaveRelation',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '0ac29e893c9c8ad606bc0326e88b4f10' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereDoesntHaveRelation',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '18498e792dcc933fe81228ea9845f07b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereMorphRelation',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'a447b039b9d5823c9b55872d81a4756e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereMorphRelation',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'b7984bf2f9fc04479e343a55ca48efb7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereMorphDoesntHaveRelation',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '6108ded278d55c442687a6051186c574' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereMorphDoesntHaveRelation',
         'templatePhpDocNodes' => 
        array (
          'TRelatedModel' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TRelatedModel',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '7e23093ba5f898e76bc2a7913049f1cd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereMorphedTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '950ce1d3fc5b740648437bc6bb5cdbd2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereNotMorphedTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'eb1c9ea226f91e73052e809c4a1b4387' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereMorphedTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'd1ef2e19a4439c470dbf2e4a76a63476' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereNotMorphedTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '5441c4d5cf79f84e6bb0d3fdd19ebe91' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereBelongsTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '5e6e7820dfcde6f9bc5b1a919341393d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereBelongsTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '629883be832c40c03c2558fc535c67d7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereAttachedTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'fa27d71ffb0f19773c69fc369a4354bb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereAttachedTo',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '7f48985ce467488078766a42fd1980cb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withAggregate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'ee3115d499771e32d4f2bc8a95c013c9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getRelationHashedColumn',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '1e680e42251ab22e3bbbc0fc1cb047b9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withCount',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '4a84ad10a7cee63b28c5c9e9cfeb20e7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withMax',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '6124b343164948436ec69c45ce90b2b8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withMin',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '0f560eaac0e68875de57504ca8bcdb1a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withSum',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'eff5a44966f254b2530fe1d537cf4b1b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withAvg',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '78ca3cc4e8603df08959ccb69203a092' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withExists',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '6acd0146dafd55175ab5df97c4fadc53' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addHasWhere',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '92eb85a5aba33f3e1f4409b38e1c9f70' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'mergeConstraintsFrom',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'fff0a7cb61042cbba800c55d9f09bfb2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'requalifyWhereTables',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'cbc0edabe542f86e2680cb14000f7c95' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addWhereCountQuery',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '3122ec4ee97c9cf5d026f4671f7a7221' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getRelationWithoutConstraints',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      'b104b3b12adc6ff7dbea4350f37763c4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
          'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
          'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'expression' => 'Illuminate\\Database\\Query\\Expression',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'invalidargumentexception' => 'InvalidArgumentException',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'canUseExistsForExistenceCheck',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent\\Concerns',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'builder' => 'Illuminate\\Database\\Eloquent\\Builder',
            'eloquentcollection' => 'Illuminate\\Database\\Eloquent\\Collection',
            'relationnotfoundexception' => 'Illuminate\\Database\\Eloquent\\RelationNotFoundException',
            'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'expression' => 'Illuminate\\Database\\Query\\Expression',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'invalidargumentexception' => 'InvalidArgumentException',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
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
           'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
           'traitData' => NULL,
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
         'constUses' => 
        array (
        ),
         'typeAliasClassName' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
         'traitData' => 
        array (
          0 => '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php',
          1 => 'Illuminate\\Database\\Eloquent\\Builder',
          2 => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          3 => NULL,
          4 => '/** @use \\Illuminate\\Database\\Concerns\\BuildsQueries<TModel> */',
        ),
      )),
      '29189d7fbc59f564089c631625702ed4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => '__construct',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '6db3d318c02b4ddd96617a6cda6469f1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'make',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '75d0a5a7e5dd56b7ec6a2e093372c9e4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withGlobalScope',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '2b337b05e90fdc8a445a48fb0b1ad1d3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withoutGlobalScope',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '00ba4e9e2b2add8748e03a50c1ed4565' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withoutGlobalScopes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '468db31848c49dc650efd689b8257222' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withoutGlobalScopesExcept',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'd8be3fc3507f7825c2a037b2ff40bbe1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'removedScopes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '621dcf06518a96d9538c41bcb5b936e4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereKey',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '870bf7ad3310168d08021cfa5944f5eb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereKeyNot',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '9e8b02f77b06234e8beb9dfe1fde1c03' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereKey',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'c6e7a633d7c6bb22352ca2f1661ef17a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereKeyNot',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '680ea7977009d22d762c939015472552' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'except',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'bdd7e1084293d3c8730f01f5597e0cf9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'where',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '30bd6dec8a3dd9d1faeb129ee8722167' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstWhere',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'ea075a4d7bcac76a1e2fb9483e25df33' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhere',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '43da2d231117e6a6f014467a1bcc0242' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'whereNot',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '9bcfcc139fd164dfaeaa9cd4bbcc5fec' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'orWhereNot',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '5064b1561f4d998359a35843b35e9218' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'latest',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'd1b1ddfb00a5c2d7ca825f816b765674' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'oldest',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'c8ced20622c26e86b7a4e54d37ff14d5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hydrate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'a9bfb1ef85e96c9e6d2d7abce1ae4bcf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'fillAndInsert',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '4552aa3939f53dbc474f5864a6fd612e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'fillAndInsertOrIgnore',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '619ce7f323979f8d38ec866b447f389b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'fillAndInsertGetId',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '8acbfc541b441ada21d2a4a44880ec9a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'fillForInsert',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'a6fd897cdff0eb3d49b96285daa66e0d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'fromQuery',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '3613c082e676b85d706a670723b1868e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'find',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'e0e1557cd1ee33fb33bafb2ee3d2dcbc' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findSole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'fa628522886fcbf4701966734be1d234' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findMany',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'ee4a08a5db47c1cb01eeb121a6cbbc0f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findOrFail',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'e544d1647424e8b1848876c49f050682' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findOrNew',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'f66c7f2c68f7a52c8e3b32ce230148e2' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'findOr',
         'templatePhpDocNodes' => 
        array (
          'TValue' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TValue',
               'bound' => NULL,
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '54590d1fdee5c826a2d5a89da4292602' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOrNew',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'f854eeca66ea890ecca297034d61de01' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOrCreate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '7b7ebdd0da8d04456878b1c8f2c2da89' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'createOrFirst',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '8f7516b6b276316fc46c8fe597122634' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'updateOrCreate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '43d4cf05c0c9bc1ddc4330a055bec70a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'incrementOrCreate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '087fcd256ccae595614dec4dc6ad9cd4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOrFail',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '63fee3c64f398900c8132bd6c9a13645' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'firstOr',
         'templatePhpDocNodes' => 
        array (
          'TValue' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TValue',
               'bound' => NULL,
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '88063c552bc53c2d4c557de751dce8ff' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'sole',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'b3ff40c38cd3170ea4f76f7684cc6b61' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'value',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'a4d7f6a1e00b0a5ce737d4b289c2c4ca' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'soleValue',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '9688d4b4ec15aea1cbf85033e3591244' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'valueOrFail',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '154b00cf61f8ef79fd671577ebf8579b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'get',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '7fc382d77b9b02b228de3dcaec8d54cb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getModels',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'ab18a342b6ba6b07174ff8d3c0974a6b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'eagerLoadRelations',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '28464efe231c69e9d8985c5b85267f11' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'eagerLoadRelation',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'fd276b1d8b9479f251d192aa6b070b3d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getRelation',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'fdf9769a8b0858f15634ea10f73b50c8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'relationsNestedUnder',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '5286b4120b5a2251f1dd67b31815f50e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'isNestedUnder',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'bb16fbac7f731c4f631e11867df2ec2d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'afterQuery',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'e66292bea0ca37e81591f85b24c5491e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'applyAfterQueryCallbacks',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '37e82f5ac4e1a509dc253b1a1670b956' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'cursor',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '666e60d778beae3119ba47727fbe233c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'enforceOrderBy',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '8ecec238b273605d308923f5d78026f1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'pluck',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'ec00257aa95a6a125499b9009ce8c501' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'modelKeys',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '6320c031dae83db8dbc88fe07284aaf0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'paginate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '80b669d4ca1dcdb1f3ec72ab59abd129' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'simplePaginate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'f2eb10da2f370be25fd75cbfc3060da8' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'cursorPaginate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '40bfe45a96c4c2e5870eb5e90f0f49f7' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'ensureOrderForCursorPagination',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '98cfc9349dddee624523bf25f31f5ac6' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'create',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '41984115aa2c3b0274e075903da1ce57' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'createQuietly',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '04e85c918bdf0130e2cfc9da92d2b6cf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'forceCreate',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '40460c8e2782d494b0f525aa357bae5f' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'forceCreateQuietly',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '70d0f7dce6e98ff4263c31655e03f6e0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'update',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'a401e2b1feee1805b256a1cfbf62cb9a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'upsert',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '7d888d9d5211ddcab3d8177a03a8b2f1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'touch',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '3977842a83033fe3e402d068d3a7bbfd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'increment',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '99e274518053834ca3e0bcd73a5c6089' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'decrement',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'b38cf1e28875320b63438edf609b802c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'incrementEach',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'b0a06635ec48d79a7435b4a87b52ad85' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'decrementEach',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '4029e99bdf1a9060c450310a935fdb15' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addUpdatedAtColumn',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '703d1032eda0e25c567084a37bcd99e3' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addUniqueIdsToUpsertValues',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '4dcd33c8699c9c93b3f0378cd199f8c5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addTimestampsToUpsertValues',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '988921ee03c1fd06c3e64f69232bd939' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addUpdatedAtToUpsertColumns',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'a8e049d7c51009f8dc823324f39c991d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'delete',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '91fe8490fc14791b628a009b2f4921ac' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'forceDelete',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '73abd77da30e124d7f48993f03efa07a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'onDelete',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '627b3b9f387e129a75cfa2ec1d7ea63a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hasNamedScope',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '25b019aa31efe2ef854138e9818b2628' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'scopes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '9dca80a29bc310f681056c19b854eeda' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'applyScopes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'b417b08be6acb0ea2deb389cd582d2f0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'callScope',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '639b1c8cee1a0589bd0339468b558c9b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'callNamedScope',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'dcd1f29b73b4ba461d70243fbcd3f86a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addNewWheresWithinGroup',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'f42f57f4cb5e0010ef0903d37208a5df' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'groupWhereSliceForScope',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '0e1a456de07cbaa46a1280b243ba2ac9' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'createNestedWhere',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '8be08464ca9492460a077f41b7d0217a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'with',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '6dbaa4adb4baccf353a01c2807c24d77' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'without',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'adf1e23c8076f42b546ce0b0cc1f9d78' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withOnly',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'ea541d401d4e154853b7e6aef274782d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'newModelInstance',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '6273aadb97e07addc0de4d282e674a8b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'parseWithRelations',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '42e71eabdb0905ffe312c1070b595e84' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'prepareNestedWithRelationships',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '216640963b20d1b545b65d825b729a64' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'combineConstraints',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'd12ee17890b0bc7057ab87bbb93f2edf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'parseNameAndAttributeSelectionConstraint',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '9360b7133d2feaa5f2064bacd200c649' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'createSelectWithConstraint',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '92a1220bd060188c36030397a21c8296' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'addNestedWiths',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '83d0b6ed8382ad6b2b21e4811d4f8dde' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withAttributes',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'c04286bcdecf0e248a4611d09e37b8b5' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withCasts',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '980621749b699ec92b02bdddf5e0feff' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withSavepointIfNeeded',
         'templatePhpDocNodes' => 
        array (
          'TModelValue' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TModelValue',
               'bound' => NULL,
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '643e8e6959d1ab277b4e0a6cdc614f72' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getUnionBuilders',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '12c2820cccf623bdaf2c26ab994ce751' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getQuery',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '10dfa6f084f87594655281f80329019a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'setQuery',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '787d241b0ae741206c8235e1607ee443' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'toBase',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'd23d18a55510b6db83423f9e0fb6704a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getEagerLoads',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'fed752231c2ed4b804704b16bd1b2b36' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'setEagerLoads',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'dcc86d645f968c9b2f0914a3ed904d73' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withoutEagerLoad',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'dcdf7bbab407f34fe7309845edad37ce' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'withoutEagerLoads',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '4c2c557396af2266b5049c0dc839212b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getLimit',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '29ca16619094000d4c0c10e478f0e00a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getOffset',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '9cd474768108c983e6501a3be675e699' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'defaultKeyName',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '22f2449e1716dbf144f0eb0ea8d7f9f1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getModel',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'e33bb8160527b9115d35daa777d7eab1' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'setModel',
         'templatePhpDocNodes' => 
        array (
          'TModelNew' => 
          array (
            0 => '@template',
            1 => 
            \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
               'name' => 'TModelNew',
               'bound' => 
              \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                 'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                 'attributes' => 
                array (
                  'startLine' => 4,
                  'endLine' => 4,
                ),
              )),
               'default' => NULL,
               'lowerBound' => NULL,
               'description' => '',
               'attributes' => 
              array (
                'startLine' => 4,
                'endLine' => 4,
              ),
            )),
          ),
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '19bcee692e3563b98d3e34201562a6bd' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'qualifyColumn',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'b3bd4984831ed11d7b9efd2a3cea5873' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'qualifyColumns',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'eef21cf1d34a392564c17d11da8fe34a' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getTableAlias',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '4407ff4cf4205dab1ec512d6b959b49b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getMacro',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '8b80e65d6064679ce4902fe4af099c8b' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hasMacro',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'b31fc45543d58315e709ff8184153fa0' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'getGlobalMacro',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '1c40ede85cc7e30fa5839f9983cfc1ed' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'hasGlobalMacro',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'cfb81188bc7be38e4d0ca2ea100c3a2c' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => '__get',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'ec33473c664e994b19709b2ab7b7558e' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => '__call',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '3e8e10910a301c782ff48d5976c5830d' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => '__callStatic',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '94371f1dffb2b6426f976c021199b6fb' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'registerMixin',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '99e0c5ee70c63c81c1db63dafd2c69cf' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'clone',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      'b8f5d2743e11eaa8f6e9e162deb9ab37' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => 'onClone',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '63a03c5802bd32404e89040b05ebbea4' => 
      \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
         'namespace' => 'Illuminate\\Database\\Eloquent',
         'uses' => 
        array (
          'badmethodcallexception' => 'BadMethodCallException',
          'closure' => 'Closure',
          'exception' => 'Exception',
          'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
          'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
          'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
          'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
          'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
          'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
          'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
          'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
          'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
          'paginator' => 'Illuminate\\Pagination\\Paginator',
          'arr' => 'Illuminate\\Support\\Arr',
          'basecollection' => 'Illuminate\\Support\\Collection',
          'str' => 'Illuminate\\Support\\Str',
          'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
          'reflectionclass' => 'ReflectionClass',
          'reflectionmethod' => 'ReflectionMethod',
          'sortdirection' => 'SortDirection',
        ),
         'className' => 'Illuminate\\Database\\Eloquent\\Builder',
         'functionName' => '__clone',
         'templatePhpDocNodes' => 
        array (
        ),
         'parent' => 
        \PHPStan\Analyser\IntermediaryNameScope::__set_state(array(
           'namespace' => 'Illuminate\\Database\\Eloquent',
           'uses' => 
          array (
            'badmethodcallexception' => 'BadMethodCallException',
            'closure' => 'Closure',
            'exception' => 'Exception',
            'buildercontract' => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
            'expression' => 'Illuminate\\Contracts\\Database\\Query\\Expression',
            'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            'buildsqueries' => 'Illuminate\\Database\\Concerns\\BuildsQueries',
            'queriesrelationships' => 'Illuminate\\Database\\Eloquent\\Concerns\\QueriesRelationships',
            'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
            'relation' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
            'querybuilder' => 'Illuminate\\Database\\Query\\Builder',
            'recordsnotfoundexception' => 'Illuminate\\Database\\RecordsNotFoundException',
            'uniqueconstraintviolationexception' => 'Illuminate\\Database\\UniqueConstraintViolationException',
            'paginator' => 'Illuminate\\Pagination\\Paginator',
            'arr' => 'Illuminate\\Support\\Arr',
            'basecollection' => 'Illuminate\\Support\\Collection',
            'str' => 'Illuminate\\Support\\Str',
            'forwardscalls' => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            'reflectionclass' => 'ReflectionClass',
            'reflectionmethod' => 'ReflectionMethod',
            'sortdirection' => 'SortDirection',
          ),
           'className' => 'Illuminate\\Database\\Eloquent\\Builder',
           'functionName' => NULL,
           'templatePhpDocNodes' => 
          array (
            'TModel' => 
            array (
              0 => '@template',
              1 => 
              \PHPStan\PhpDocParser\Ast\PhpDoc\TemplateTagValueNode::__set_state(array(
                 'name' => 'TModel',
                 'bound' => 
                \PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode::__set_state(array(
                   'name' => '\\Illuminate\\Database\\Eloquent\\Model',
                   'attributes' => 
                  array (
                    'startLine' => 2,
                    'endLine' => 2,
                  ),
                )),
                 'default' => NULL,
                 'lowerBound' => NULL,
                 'description' => '',
                 'attributes' => 
                array (
                  'startLine' => 2,
                  'endLine' => 2,
                ),
              )),
            ),
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
      '/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php' => 'accd3751582811a344cc3e8b9bac4b7aef5117d568a1537342aa272873496e3e',
      '/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Concerns/BuildsQueries.php' => '86cdd809eaa23e889a0af6511f05382ce11b02ec3abbd61b5fe970362c8ff110',
      '/app/vendor/composer/../laravel/framework/src/Illuminate/Conditionable/Traits/Conditionable.php' => '5697fdba0acb78ca0b4e122e5c459cd5d97d000ed9b14fed31271cb7ffd44225',
      '/app/vendor/composer/../laravel/framework/src/Illuminate/Support/Traits/ForwardsCalls.php' => 'b90103bc7248a11bd7629c525e064a45a50dd93ae0d836bcb79937e63f0b3568',
      '/app/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Concerns/QueriesRelationships.php' => '5ea4c1762c69284ce9436057fff14ac9a51396ba8498f2e79e58b166e12edac0',
    ),
  ),
));