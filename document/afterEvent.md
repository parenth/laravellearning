object(Illuminate\Foundation\Application)#3 (28) {
  ["basePath":protected]=>
  NULL
  ["hasBeenBootstrapped":protected]=>
  bool(false)
  ["booted":protected]=>
  bool(false)
  ["bootingCallbacks":protected]=>
  array(0) {
  }
  ["bootedCallbacks":protected]=>
  array(0) {
  }
  ["terminatingCallbacks":protected]=>
  array(0) {
  }
  ["serviceProviders":protected]=>
  array(1) {
    [0]=>
    object(Illuminate\Events\EventServiceProvider)#2 (2) {
      ["app":protected]=>
      *RECURSION*
      ["defer":protected]=>
      bool(false)
    }
  }
  ["loadedProviders":protected]=>
  array(1) {
    ["Illuminate\Events\EventServiceProvider"]=>
    bool(true)
  }
  ["deferredServices":protected]=>
  array(0) {
  }
  ["monologConfigurator":protected]=>
  NULL
  ["databasePath":protected]=>
  NULL
  ["storagePath":protected]=>
  NULL
  ["environmentPath":protected]=>
  NULL
  ["environmentFile":protected]=>
  string(4) ".env"
  ["namespace":protected]=>
  NULL
  ["resolved":protected]=>
  array(1) {
    ["events"]=>
    bool(true)
  }
  ["bindings":protected]=>
  array(1) {
    ["events"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#4 (2) {
        ["this"]=>
        object(Illuminate\Events\EventServiceProvider)#2 (2) {
          ["app":protected]=>
          *RECURSION*
          ["defer":protected]=>
          bool(false)
        }
        ["parameter"]=>
        array(1) {
          ["$app"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(true)
    }
  }
  ["instances":protected]=>
  array(3) {
    ["app"]=>
    *RECURSION*
    ["Illuminate\Container\Container"]=>
    *RECURSION*
    ["events"]=>
    object(Illuminate\Events\Dispatcher)#5 (6) {
      ["container":protected]=>
      *RECURSION*
      ["listeners":protected]=>
      array(0) {
      }
      ["wildcards":protected]=>
      array(0) {
      }
      ["sorted":protected]=>
      array(1) {
        ["Illuminate\Events\EventServiceProvider"]=>
        array(0) {
        }
      }
      ["firing":protected]=>
      array(0) {
      }
      ["queueResolver":protected]=>
      object(Closure)#6 (2) {
        ["static"]=>
        array(1) {
          ["app"]=>
          *RECURSION*
        }
        ["this"]=>
        object(Illuminate\Events\EventServiceProvider)#2 (2) {
          ["app":protected]=>
          *RECURSION*
          ["defer":protected]=>
          bool(false)
        }
      }
    }
  }
  ["aliases":protected]=>
  array(0) {
  }
  ["extenders":protected]=>
  array(0) {
  }
  ["tags":protected]=>
  array(0) {
  }
  ["buildStack":protected]=>
  array(0) {
  }
  ["contextual"]=>
  array(0) {
  }
  ["reboundCallbacks":protected]=>
  array(0) {
  }
  ["globalResolvingCallbacks":protected]=>
  array(0) {
  }
  ["globalAfterResolvingCallbacks":protected]=>
  array(0) {
  }
  ["resolvingCallbacks":protected]=>
  array(0) {
  }
  ["afterResolvingCallbacks":protected]=>
  array(0) {
  }
}