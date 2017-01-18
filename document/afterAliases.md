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
  array(2) {
    [0]=>
    object(Illuminate\Events\EventServiceProvider)#2 (2) {
      ["app":protected]=>
      *RECURSION*
      ["defer":protected]=>
      bool(false)
    }
    [1]=>
    object(Illuminate\Routing\RoutingServiceProvider)#7 (2) {
      ["app":protected]=>
      *RECURSION*
      ["defer":protected]=>
      bool(false)
    }
  }
  ["loadedProviders":protected]=>
  array(2) {
    ["Illuminate\Events\EventServiceProvider"]=>
    bool(true)
    ["Illuminate\Routing\RoutingServiceProvider"]=>
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
  array(7) {
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
    ["router"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#9 (3) {
        ["static"]=>
        array(2) {
          ["closure"]=>
          object(Closure)#8 (2) {
            ["this"]=>
            object(Illuminate\Routing\RoutingServiceProvider)#7 (2) {
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
          ["object"]=>
          NULL
        }
        ["this"]=>
        *RECURSION*
        ["parameter"]=>
        array(1) {
          ["$container"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(false)
    }
    ["url"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#11 (3) {
        ["static"]=>
        array(2) {
          ["closure"]=>
          object(Closure)#10 (2) {
            ["this"]=>
            object(Illuminate\Routing\RoutingServiceProvider)#7 (2) {
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
          ["object"]=>
          NULL
        }
        ["this"]=>
        *RECURSION*
        ["parameter"]=>
        array(1) {
          ["$container"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(false)
    }
    ["redirect"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#13 (3) {
        ["static"]=>
        array(2) {
          ["closure"]=>
          object(Closure)#12 (2) {
            ["this"]=>
            object(Illuminate\Routing\RoutingServiceProvider)#7 (2) {
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
          ["object"]=>
          NULL
        }
        ["this"]=>
        *RECURSION*
        ["parameter"]=>
        array(1) {
          ["$container"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(false)
    }
    ["Psr\Http\Message\ServerRequestInterface"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#14 (2) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#7 (2) {
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
      bool(false)
    }
    ["Psr\Http\Message\ResponseInterface"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#15 (2) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#7 (2) {
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
      bool(false)
    }
    ["Illuminate\Contracts\Routing\ResponseFactory"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#16 (2) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#7 (2) {
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
      array(2) {
        ["Illuminate\Events\EventServiceProvider"]=>
        array(0) {
        }
        ["Illuminate\Routing\RoutingServiceProvider"]=>
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
  array(62) {
    ["Illuminate\Foundation\Application"]=>
    string(3) "app"
    ["Illuminate\Contracts\Container\Container"]=>
    string(3) "app"
    ["Illuminate\Contracts\Foundation\Application"]=>
    string(3) "app"
    ["Illuminate\Auth\AuthManager"]=>
    string(4) "auth"
    ["Illuminate\Contracts\Auth\Factory"]=>
    string(4) "auth"
    ["Illuminate\Contracts\Auth\Guard"]=>
    string(11) "auth.driver"
    ["Illuminate\View\Compilers\BladeCompiler"]=>
    string(14) "blade.compiler"
    ["Illuminate\Cache\CacheManager"]=>
    string(5) "cache"
    ["Illuminate\Contracts\Cache\Factory"]=>
    string(5) "cache"
    ["Illuminate\Cache\Repository"]=>
    string(11) "cache.store"
    ["Illuminate\Contracts\Cache\Repository"]=>
    string(11) "cache.store"
    ["Illuminate\Config\Repository"]=>
    string(6) "config"
    ["Illuminate\Contracts\Config\Repository"]=>
    string(6) "config"
    ["Illuminate\Cookie\CookieJar"]=>
    string(6) "cookie"
    ["Illuminate\Contracts\Cookie\Factory"]=>
    string(6) "cookie"
    ["Illuminate\Contracts\Cookie\QueueingFactory"]=>
    string(6) "cookie"
    ["Illuminate\Encryption\Encrypter"]=>
    string(9) "encrypter"
    ["Illuminate\Contracts\Encryption\Encrypter"]=>
    string(9) "encrypter"
    ["Illuminate\Database\DatabaseManager"]=>
    string(2) "db"
    ["Illuminate\Database\Connection"]=>
    string(13) "db.connection"
    ["Illuminate\Database\ConnectionInterface"]=>
    string(13) "db.connection"
    ["Illuminate\Events\Dispatcher"]=>
    string(6) "events"
    ["Illuminate\Contracts\Events\Dispatcher"]=>
    string(6) "events"
    ["Illuminate\Filesystem\Filesystem"]=>
    string(5) "files"
    ["Illuminate\Filesystem\FilesystemManager"]=>
    string(10) "filesystem"
    ["Illuminate\Contracts\Filesystem\Factory"]=>
    string(10) "filesystem"
    ["Illuminate\Contracts\Filesystem\Filesystem"]=>
    string(15) "filesystem.disk"
    ["Illuminate\Contracts\Filesystem\Cloud"]=>
    string(16) "filesystem.cloud"
    ["Illuminate\Contracts\Hashing\Hasher"]=>
    string(4) "hash"
    ["Illuminate\Translation\Translator"]=>
    string(10) "translator"
    ["Symfony\Component\Translation\TranslatorInterface"]=>
    string(10) "translator"
    ["Illuminate\Log\Writer"]=>
    string(3) "log"
    ["Illuminate\Contracts\Logging\Log"]=>
    string(3) "log"
    ["Psr\Log\LoggerInterface"]=>
    string(3) "log"
    ["Illuminate\Mail\Mailer"]=>
    string(6) "mailer"
    ["Illuminate\Contracts\Mail\Mailer"]=>
    string(6) "mailer"
    ["Illuminate\Contracts\Mail\MailQueue"]=>
    string(6) "mailer"
    ["Illuminate\Auth\Passwords\PasswordBrokerManager"]=>
    string(13) "auth.password"
    ["Illuminate\Contracts\Auth\PasswordBrokerFactory"]=>
    string(13) "auth.password"
    ["Illuminate\Auth\Passwords\PasswordBroker"]=>
    string(20) "auth.password.broker"
    ["Illuminate\Contracts\Auth\PasswordBroker"]=>
    string(20) "auth.password.broker"
    ["Illuminate\Queue\QueueManager"]=>
    string(5) "queue"
    ["Illuminate\Contracts\Queue\Factory"]=>
    string(5) "queue"
    ["Illuminate\Contracts\Queue\Monitor"]=>
    string(5) "queue"
    ["Illuminate\Contracts\Queue\Queue"]=>
    string(16) "queue.connection"
    ["Illuminate\Queue\Failed\FailedJobProviderInterface"]=>
    string(12) "queue.failer"
    ["Illuminate\Routing\Redirector"]=>
    string(8) "redirect"
    ["Illuminate\Redis\Database"]=>
    string(5) "redis"
    ["Illuminate\Contracts\Redis\Database"]=>
    string(5) "redis"
    ["Illuminate\Http\Request"]=>
    string(7) "request"
    ["Symfony\Component\HttpFoundation\Request"]=>
    string(7) "request"
    ["Illuminate\Routing\Router"]=>
    string(6) "router"
    ["Illuminate\Contracts\Routing\Registrar"]=>
    string(6) "router"
    ["Illuminate\Session\SessionManager"]=>
    string(7) "session"
    ["Illuminate\Session\Store"]=>
    string(13) "session.store"
    ["Symfony\Component\HttpFoundation\Session\SessionInterface"]=>
    string(13) "session.store"
    ["Illuminate\Routing\UrlGenerator"]=>
    string(3) "url"
    ["Illuminate\Contracts\Routing\UrlGenerator"]=>
    string(3) "url"
    ["Illuminate\Validation\Factory"]=>
    string(9) "validator"
    ["Illuminate\Contracts\Validation\Factory"]=>
    string(9) "validator"
    ["Illuminate\View\Factory"]=>
    string(4) "view"
    ["Illuminate\Contracts\View\Factory"]=>
    string(4) "view"
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