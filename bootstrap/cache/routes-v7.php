<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentSave',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::requirements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::permissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/queries/explain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.queries.explain',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verify-purchase',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchase-verified' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-verified',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::exMGnR5Fyu3eQCCH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/refresh-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zJohG1i0qarvIZBZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stripe/webhook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier.webhook',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'login.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile-information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-profile-information.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirmed-password-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/two-factor-challenge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.login.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.enable',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.disable',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirmed-two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-qr-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.qr-code',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-secret-key' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.secret-key',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-recovery-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.recovery-codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZFZILNVvzc2n3ty6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teams/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/current-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'current-team.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.min.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::btXddjBe6wrt0x26',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.min.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FXq8koa7FiPhiPXx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/hosts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.hosts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/clear-cache-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache-all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/delete-multiple-files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete-multiple-files',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/api/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test-connection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BOwij1y4fuqQnHhf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/print-jobs/pull' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VJirbDS7BJBKpkV3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/print-jobs/pull-multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yW35A9nuTS2nSQPn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/printer-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Hm3I3NDdGKikNui',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e3XTbUKbM374pQqJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manifest.json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manifest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/restaurant-signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'restaurant_signup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer-logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer_logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stripe/order-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe.order_payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stripe/success-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stripe/license-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe.license_payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stripe/license-success-callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe.license_success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/flutterwave/initiate-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'flutterwave.initiate-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/flutterwave/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'flutterwave.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/initiate-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.initiate-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/billing/paypal-recurring' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'billing.paypal-recurring',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/lifetime/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.lifetime.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payfast/initiate-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payfast.initiate-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/billing/payfast-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'billing.payfast-success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/billing/payfast-cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'billing.payfast-cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paystack/initiate-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paystack.initiate-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paystack/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paystack.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account_unverified' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account_unverified',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/onboarding-steps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'onboarding_steps',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menus.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/menus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/menu-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu-items.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menu-items.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/menu-items/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu-items.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/item-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item-categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'item-categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/item-categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item-categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/item-modifiers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item-modifiers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'item-modifiers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/item-modifiers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item-modifiers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/modifier-groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modifier-groups.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'modifier-groups.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/modifier-groups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modifier-groups.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sort-entities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'entities.sort',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/areas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'areas.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'areas.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/areas/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'areas.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tables.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tables/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pos.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pos/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kots' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kots.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kots.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kots/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kots.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/due' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.due',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.expenses',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/expenseCategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments.expenseCategory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/qr-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'qrcodes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reservations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reservations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reservations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reservations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reservations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/item-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.item',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/category-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/sales-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.sales',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/expense-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.expenseReports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/outstanding-payment-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.outstandingPayment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/expense-summary-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.expensesummaryreport',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/print-log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.printLog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/staff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'staff.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/staff/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delivery-executives' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery-executives.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delivery-executives.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delivery-executives/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery-executives.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/billing/upgrade-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pricing.plan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pusher/beams-auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'beam_auth',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/waiter-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'waiter-requests.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'waiter-requests.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/waiter-requests/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'waiter-requests.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer-display' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.display',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/super-admin-dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/restaurants' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurants.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurants.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/restaurants/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurants.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/restaurant-payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurant-payments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurant-payments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/restaurant-payments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurant-payments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/packages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.packages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.packages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/packages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.packages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.invoices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.invoices.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/invoices/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.invoices.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/offline-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.offline-plan-request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.superadmin-settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.superadmin-settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/superadmin-settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.superadmin-settings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app-update/deleteFile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.app-update.deleteFile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.app-update.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.app-update.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/app-update/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.app-update.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/custom-modules/verify-purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.custom-modules.verify_purchase',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/custom-modules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.custom-modules.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.custom-modules.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/custom-modules/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.custom-modules.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/landing-sites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.landing-sites.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.landing-sites.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/landing-sites/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.landing-sites.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paystack.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paystack.failed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/offline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vA7Zt8wUEh6UHMXP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payfast/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payfast.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payfast/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payfast.failed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paypal/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test-pusher-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QtCpnPxdkVTM7bfA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'units.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/units/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-item-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-item-categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-item-categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-item-categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-item-categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-items.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-items.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-items/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-items.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-stocks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-stocks.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-stocks.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-stocks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-stocks.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-movements/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-movements.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-movements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-movements.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-movements.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-movements/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-movements.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/recipes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recipes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'recipes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/recipes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recipes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/purchase-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/purchase-orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/suppliers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'suppliers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'suppliers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/suppliers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'suppliers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/inventory-settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-settings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/reports/usage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.reports.usage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/reports/turnover' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.reports.turnover',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/reports/forecasting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.reports.forecasting',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/reports/cogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.reports.cogs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inventory/reports/profit-and-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory.reports.profit-and-loss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/t(?|ranslations(?|/view(?:/(.*))?(*:115)|(?:/(.*))?(*:133)|/(?|add/(.*)(*:153)|edit/(.*)(*:170)|groups/add(*:188)|delete/(.*)/([^/]++)(*:216)|import(*:230)|find(*:242)|locales/(?|add(*:264)|remove(*:278))|publish/(.*)(*:299)|translate\\-missing(*:325)))|eam(?|s/([^/]++)(*:351)|\\-invitations/([^/]++)(*:381))|ables/([^/]++)(?|(*:407)|/edit(*:420)|(*:428)))|/hide\\-review\\-modal/([^/]++)(*:467)|/d(?|own/([^/]++)(*:492)|elivery\\-executives/([^/]++)(?|(*:531)|/edit(*:544)|(*:552)))|/up/([^/]++)(*:574)|/a(?|dmin/update\\-version/(?|update(?:/([^/]++))?(*:631)|download(?|(?:/([^/]++))?(*:664)|Percent(?:/([^/]++))?(*:693))|check(?|IfFileExtracted(?:/([^/]++))?(*:739)|Support(?:/([^/]++))?(*:768))|install(?:/([^/]++))?(*:798)|refresh(?:/([^/]++))?(*:827)|notify/([^/]++)(*:850))|p(?|i/print\\-jobs/(?|([^/]++)(*:888)|printer/([^/]++)/jobs(*:917)|([^/]++)/(?|complete(*:945)|failed(*:959))|pending/([^/]++)(*:984))|p\\-update/([^/]++)(?|(*:1014)|/edit(*:1028)|(*:1037)))|reas/([^/]++)(?|(*:1064)|/edit(*:1078)|(*:1087)))|/s(?|t(?|ripe/payment/([^/]++)(*:1128)|aff/([^/]++)(?|(*:1152)|/edit(*:1166)|(*:1175)))|ettings/([^/]++)(?|(*:1205)|/edit(*:1219)|(*:1228))|uperadmin\\-settings/([^/]++)(?|(*:1269)|/edit(*:1283)|(*:1292))|ave\\-paypal\\-webhook/([^/]++)(*:1331))|/res(?|e(?|t\\-password/([^/]++)(*:1372)|rvations/([^/]++)(?|(*:1401)|/edit(*:1415)|(*:1424)))|taurant(?|/(?|table/([^/]++)(*:1463)|my\\-(?|orders/([^/]++)(*:1494)|bookings/([^/]++)(*:1520)|addresses/([^/]++)(*:1547))|book\\-a\\-table/([^/]++)(*:1580)|contact/([^/]++)(*:1605)|about\\-us/([^/]++)(*:1632)|profile/([^/]++)(*:1657)|orders\\-success/([^/]++)(*:1690)|([^/]++)(*:1707))|s/([^/]++)(?|(*:1730)|/edit(*:1744)|(*:1753))|\\-payments/([^/]++)(?|(*:1785)|/edit(*:1799)|(*:1808))))|/l(?|ivewire/preview\\-file/([^/]++)(*:1855)|og\\-viewer(?|/api/f(?|olders/([^/]++)(?|/(?|download(?|/request(*:1927)|(*:1936))|clear\\-cache(*:1958))|(*:1968))|iles/([^/]++)(?|/(?|download(?|/request(*:2017)|(*:2026))|clear\\-cache(*:2048))|(*:2058)))|(?:/((?:.*)))?(*:2083))|anding\\-sites/([^/]++)(?|(*:2118)|/edit(*:2132)|(*:2141)))|/p(?|a(?|ge/([^/]++)(*:2172)|ckages/([^/]++)(?|(*:2199)|/edit(*:2213)|(*:2222))|yfast\\-notification/([^/]++)(*:2260))|os/(?|order/([^/]++)(*:2290)|kot/([^/]++)(*:2311)|([^/]++)(?|(*:2331)|/edit(*:2345)|(*:2354))))|/m(?|enu(?|s/([^/]++)(?|(*:2390)|/edit(*:2404)|(*:2413))|\\-items/([^/]++)(?|(*:2442)|/edit(*:2456)|(*:2465)))|odifier\\-groups/([^/]++)(?|(*:2503)|/edit(*:2517)|(*:2526)))|/i(?|tem\\-(?|categories/([^/]++)(?|(*:2572)|/edit(*:2586)|(*:2595))|modifiers/([^/]++)(?|(*:2626)|/edit(*:2640)|(*:2649)))|nv(?|oices/([^/]++)(?|(*:2682)|/edit(*:2696)|(*:2705))|entory/(?|units/([^/]++)(?|(*:2742)|/edit(*:2756)|(*:2765))|inventory\\-(?|item(?|\\-categories/([^/]++)(?|(*:2820)|/edit(*:2834)|(*:2843))|s/([^/]++)(?|(*:2866)|/edit(*:2880)|(*:2889)))|s(?|tocks/([^/]++)(?|(*:2921)|/edit(*:2935)|(*:2944))|ettings/([^/]++)(?|(*:2973)|/edit(*:2987)|(*:2996)))|movements/([^/]++)(?|(*:3028)|/edit(*:3042)|(*:3051)))|recipes/([^/]++)(?|(*:3081)|/edit(*:3095)|(*:3104))|purchase\\-orders/([^/]++)(?|(*:3142)|/(?|edit(*:3159)|pdf(*:3171))|(*:3181))|suppliers/([^/]++)(?|(*:3212)|/edit(*:3226)|(*:3235)))))|/orders/(?|print/([^/]++)(*:3273)|([^/]++)(?|(*:3293)|/edit(*:3307)|(*:3316)))|/kot(?|s/([^/]++)(?|(*:3347)|/edit(*:3361)|(*:3370))|/print/([^/]++)(?:/([^/]++))?(*:3409))|/custom(?|ers/([^/]++)(?|(*:3444)|/edit(*:3458)|(*:3467))|\\-modules/([^/]++)(?|(*:3498)|/edit(*:3512)|(*:3521)))|/w(?|aiter\\-requests/([^/]++)(?|(*:3564)|/edit(*:3578)|(*:3587))|ebhook/(?|billing\\-verify\\-webhook(?:/([^/]++))?(*:3645)|save\\-(?|razorpay\\-webhook(?:/([^/]++))?(*:3694)|flutterwave\\-webhook/([^/]++)(*:3732)|paystack\\-webhook/([^/]++)(*:3767))|flutter\\-webhook/([^/]++)(*:3802)|notify/([^/]++)/([^/]++)(*:3835)|pay(?|pal\\-webhook/([^/]++)(*:3871)|stack\\-webhook/([^/]++)(*:3903)))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BSp7DmaW7H8whOPl',
            'groupKey' => NULL,
          ),
          1 => 
          array (
            0 => 'groupKey',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k6mAfOoor4XCPF3P',
            'groupKey' => NULL,
          ),
          1 => 
          array (
            0 => 'groupKey',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yXiEU1XzLYjjREfE',
          ),
          1 => 
          array (
            0 => 'groupKey',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DR7aFwjn4JJ29OQU',
          ),
          1 => 
          array (
            0 => 'groupKey',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::28fVhHiHs4HeLUd9',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QHH7hrdyijUCRbLh',
          ),
          1 => 
          array (
            0 => 'groupKey',
            1 => 'translationKey',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NkFQXbQxvBpoQM3i',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BSp1eHapSMGhucT5',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      264 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::srFs8X72FQGJe7Xs',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LkP4iToX2pTiQLsO',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bGcrrb8hcyfNeYVI',
          ),
          1 => 
          array (
            0 => 'groupKey',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::58lnrAKS7Uvtrk02',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'teams.show',
          ),
          1 => 
          array (
            0 => 'team',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'team-invitations.accept',
          ),
          1 => 
          array (
            0 => 'invitation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.show',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.edit',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.update',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tables.destroy',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hide-review-modal',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tQCOgs4H3N3q1W0F',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery-executives.show',
          ),
          1 => 
          array (
            0 => 'delivery_executive',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery-executives.edit',
          ),
          1 => 
          array (
            0 => 'delivery_executive',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery-executives.update',
          ),
          1 => 
          array (
            0 => 'delivery_executive',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'delivery-executives.destroy',
          ),
          1 => 
          array (
            0 => 'delivery_executive',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wRf8qbbjfB7erjf2',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateVersion.update',
            'module' => NULL,
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateVersion.download',
            'module' => NULL,
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      693 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateVersion.downloadPercent',
            'module' => NULL,
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateVersion.checkIfFileExtracted',
            'module' => NULL,
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateVersion.checkSupport',
            'module' => NULL,
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateVersion.install',
            'module' => NULL,
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateVersion.refresh',
            'module' => NULL,
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.updateVersion.notify',
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZYJP6tAtl9OstKsm',
          ),
          1 => 
          array (
            0 => 'printJob',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ipEXd78OIcht6Mzu',
          ),
          1 => 
          array (
            0 => 'printerId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VxgjsBI3AW9MaNxJ',
          ),
          1 => 
          array (
            0 => 'printJobId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kJb8qhMCmRHuj4ch',
          ),
          1 => 
          array (
            0 => 'printJobId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WKyq1NqaCxT7LKQF',
          ),
          1 => 
          array (
            0 => 'printId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.app-update.show',
          ),
          1 => 
          array (
            0 => 'app_update',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1028 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.app-update.edit',
          ),
          1 => 
          array (
            0 => 'app_update',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.app-update.update',
          ),
          1 => 
          array (
            0 => 'app_update',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.app-update.destroy',
          ),
          1 => 
          array (
            0 => 'app_update',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'areas.show',
          ),
          1 => 
          array (
            0 => 'area',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'areas.edit',
          ),
          1 => 
          array (
            0 => 'area',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1087 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'areas.update',
          ),
          1 => 
          array (
            0 => 'area',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'areas.destroy',
          ),
          1 => 
          array (
            0 => 'area',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashier.payment',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.show',
          ),
          1 => 
          array (
            0 => 'staff',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.edit',
          ),
          1 => 
          array (
            0 => 'staff',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.update',
          ),
          1 => 
          array (
            0 => 'staff',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'staff.destroy',
          ),
          1 => 
          array (
            0 => 'staff',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.show',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.edit',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.destroy',
          ),
          1 => 
          array (
            0 => 'setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.superadmin-settings.show',
          ),
          1 => 
          array (
            0 => 'superadmin_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1283 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.superadmin-settings.edit',
          ),
          1 => 
          array (
            0 => 'superadmin_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.superadmin-settings.update',
          ),
          1 => 
          array (
            0 => 'superadmin_setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.superadmin-settings.destroy',
          ),
          1 => 
          array (
            0 => 'superadmin_setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'billing.save_paypal-webhook',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reservations.show',
          ),
          1 => 
          array (
            0 => 'reservation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reservations.edit',
          ),
          1 => 
          array (
            0 => 'reservation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reservations.update',
          ),
          1 => 
          array (
            0 => 'reservation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'reservations.destroy',
          ),
          1 => 
          array (
            0 => 'reservation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'table_order',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1494 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my_orders',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my_bookings',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my_addresses',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'book_a_table',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1657 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order_success',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop_restaurant',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1730 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurants.show',
          ),
          1 => 
          array (
            0 => 'restaurant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurants.edit',
          ),
          1 => 
          array (
            0 => 'restaurant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurants.update',
          ),
          1 => 
          array (
            0 => 'restaurant',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurants.destroy',
          ),
          1 => 
          array (
            0 => 'restaurant',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurant-payments.show',
          ),
          1 => 
          array (
            0 => 'restaurant_payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1799 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurant-payments.edit',
          ),
          1 => 
          array (
            0 => 'restaurant_payment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurant-payments.update',
          ),
          1 => 
          array (
            0 => 'restaurant_payment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.restaurant-payments.destroy',
          ),
          1 => 
          array (
            0 => 'restaurant_payment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.request-download',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1936 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.download',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.clear-cache',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1968 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.delete',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2017 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.request-download',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2026 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.download',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2058 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.index',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2118 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.landing-sites.show',
          ),
          1 => 
          array (
            0 => 'landing_site',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.landing-sites.edit',
          ),
          1 => 
          array (
            0 => 'landing_site',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2141 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.landing-sites.update',
          ),
          1 => 
          array (
            0 => 'landing_site',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.landing-sites.destroy',
          ),
          1 => 
          array (
            0 => 'landing_site',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customMenu',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.packages.show',
          ),
          1 => 
          array (
            0 => 'package',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.packages.edit',
          ),
          1 => 
          array (
            0 => 'package',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.packages.update',
          ),
          1 => 
          array (
            0 => 'package',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.packages.destroy',
          ),
          1 => 
          array (
            0 => 'package',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payfast-notification',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.order',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.kot',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.show',
          ),
          1 => 
          array (
            0 => 'po',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.edit',
          ),
          1 => 
          array (
            0 => 'po',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pos.update',
          ),
          1 => 
          array (
            0 => 'po',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pos.destroy',
          ),
          1 => 
          array (
            0 => 'po',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2390 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.show',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.edit',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menus.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu-items.show',
          ),
          1 => 
          array (
            0 => 'menu_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu-items.edit',
          ),
          1 => 
          array (
            0 => 'menu_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu-items.update',
          ),
          1 => 
          array (
            0 => 'menu_item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menu-items.destroy',
          ),
          1 => 
          array (
            0 => 'menu_item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modifier-groups.show',
          ),
          1 => 
          array (
            0 => 'modifier_group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modifier-groups.edit',
          ),
          1 => 
          array (
            0 => 'modifier_group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'modifier-groups.update',
          ),
          1 => 
          array (
            0 => 'modifier_group',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'modifier-groups.destroy',
          ),
          1 => 
          array (
            0 => 'modifier_group',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item-categories.show',
          ),
          1 => 
          array (
            0 => 'item_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item-categories.edit',
          ),
          1 => 
          array (
            0 => 'item_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item-categories.update',
          ),
          1 => 
          array (
            0 => 'item_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'item-categories.destroy',
          ),
          1 => 
          array (
            0 => 'item_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item-modifiers.show',
          ),
          1 => 
          array (
            0 => 'item_modifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item-modifiers.edit',
          ),
          1 => 
          array (
            0 => 'item_modifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'item-modifiers.update',
          ),
          1 => 
          array (
            0 => 'item_modifier',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'item-modifiers.destroy',
          ),
          1 => 
          array (
            0 => 'item_modifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.invoices.show',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.invoices.edit',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.invoices.update',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.invoices.destroy',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.show',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.edit',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'units.update',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'units.destroy',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-item-categories.show',
          ),
          1 => 
          array (
            0 => 'inventory_item_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2834 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-item-categories.edit',
          ),
          1 => 
          array (
            0 => 'inventory_item_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2843 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-item-categories.update',
          ),
          1 => 
          array (
            0 => 'inventory_item_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-item-categories.destroy',
          ),
          1 => 
          array (
            0 => 'inventory_item_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-items.show',
          ),
          1 => 
          array (
            0 => 'inventory_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-items.edit',
          ),
          1 => 
          array (
            0 => 'inventory_item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2889 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-items.update',
          ),
          1 => 
          array (
            0 => 'inventory_item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-items.destroy',
          ),
          1 => 
          array (
            0 => 'inventory_item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-stocks.show',
          ),
          1 => 
          array (
            0 => 'inventory_stock',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2935 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-stocks.edit',
          ),
          1 => 
          array (
            0 => 'inventory_stock',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2944 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-stocks.update',
          ),
          1 => 
          array (
            0 => 'inventory_stock',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-stocks.destroy',
          ),
          1 => 
          array (
            0 => 'inventory_stock',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-settings.show',
          ),
          1 => 
          array (
            0 => 'inventory_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-settings.edit',
          ),
          1 => 
          array (
            0 => 'inventory_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-settings.update',
          ),
          1 => 
          array (
            0 => 'inventory_setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-settings.destroy',
          ),
          1 => 
          array (
            0 => 'inventory_setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3028 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-movements.show',
          ),
          1 => 
          array (
            0 => 'inventory_movement',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3042 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-movements.edit',
          ),
          1 => 
          array (
            0 => 'inventory_movement',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-movements.update',
          ),
          1 => 
          array (
            0 => 'inventory_movement',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'inventory-movements.destroy',
          ),
          1 => 
          array (
            0 => 'inventory_movement',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3081 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recipes.show',
          ),
          1 => 
          array (
            0 => 'recipe',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3095 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recipes.edit',
          ),
          1 => 
          array (
            0 => 'recipe',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'recipes.update',
          ),
          1 => 
          array (
            0 => 'recipe',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'recipes.destroy',
          ),
          1 => 
          array (
            0 => 'recipe',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-orders.show',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3159 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-orders.edit',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-orders.pdf',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-orders.update',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchase-orders.destroy',
          ),
          1 => 
          array (
            0 => 'purchase_order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'suppliers.show',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'suppliers.edit',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'suppliers.update',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'suppliers.destroy',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.print',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.edit',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'orders.destroy',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3347 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kots.show',
          ),
          1 => 
          array (
            0 => 'kot',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kots.edit',
          ),
          1 => 
          array (
            0 => 'kot',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kots.update',
          ),
          1 => 
          array (
            0 => 'kot',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'kots.destroy',
          ),
          1 => 
          array (
            0 => 'kot',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3409 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'kot.print',
            'kotPlaceid' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'kotPlaceid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.show',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.edit',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customers.update',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customers.destroy',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.custom-modules.show',
          ),
          1 => 
          array (
            0 => 'custom_module',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.custom-modules.edit',
          ),
          1 => 
          array (
            0 => 'custom_module',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.custom-modules.destroy',
          ),
          1 => 
          array (
            0 => 'custom_module',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.custom-modules.update',
          ),
          1 => 
          array (
            0 => 'custom_module',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'waiter-requests.show',
          ),
          1 => 
          array (
            0 => 'waiter_request',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'waiter-requests.edit',
          ),
          1 => 
          array (
            0 => 'waiter_request',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'waiter-requests.update',
          ),
          1 => 
          array (
            0 => 'waiter_request',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'waiter-requests.destroy',
          ),
          1 => 
          array (
            0 => 'waiter_request',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'billing.verify-webhook',
            'hash' => NULL,
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'billing.save_razorpay-webhook',
            'hash' => NULL,
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3732 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'billing.save-flutterwave-webhook',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'billing.save-paystack-webhook',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3802 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'flutterwave.webhook',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payfast.notify',
          ),
          1 => 
          array (
            0 => 'company',
            1 => 'reference',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3871 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paypal.webhook',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'paystack.webhook',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'LaravelInstaller::welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::welcome',
        'uses' => 'Froiden\\LaravelInstaller\\Controllers\\WelcomeController@welcome',
        'controller' => 'Froiden\\LaravelInstaller\\Controllers\\WelcomeController@welcome',
        'namespace' => 'Froiden\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environment',
        'uses' => 'Froiden\\LaravelInstaller\\Controllers\\EnvironmentController@environment',
        'controller' => 'Froiden\\LaravelInstaller\\Controllers\\EnvironmentController@environment',
        'namespace' => 'Froiden\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentSave' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentSave',
        'uses' => 'Froiden\\LaravelInstaller\\Controllers\\EnvironmentController@save',
        'controller' => 'Froiden\\LaravelInstaller\\Controllers\\EnvironmentController@save',
        'namespace' => 'Froiden\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::requirements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::requirements',
        'uses' => 'Froiden\\LaravelInstaller\\Controllers\\RequirementsController@requirements',
        'controller' => 'Froiden\\LaravelInstaller\\Controllers\\RequirementsController@requirements',
        'namespace' => 'Froiden\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::permissions',
        'uses' => 'Froiden\\LaravelInstaller\\Controllers\\PermissionsController@permissions',
        'controller' => 'Froiden\\LaravelInstaller\\Controllers\\PermissionsController@permissions',
        'namespace' => 'Froiden\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::database',
        'uses' => 'Froiden\\LaravelInstaller\\Controllers\\DatabaseController@database',
        'controller' => 'Froiden\\LaravelInstaller\\Controllers\\DatabaseController@database',
        'namespace' => 'Froiden\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/final',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::final',
        'uses' => 'Froiden\\LaravelInstaller\\Controllers\\FinalController@finish',
        'controller' => 'Froiden\\LaravelInstaller\\Controllers\\FinalController@finish',
        'namespace' => 'Froiden\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.queries.explain' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_debugbar/queries/explain',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'as' => 'debugbar.queries.explain',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\QueriesController@explain',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BSp7DmaW7H8whOPl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'translations/view/{groupKey?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@getView',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@getView',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::BSp7DmaW7H8whOPl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'groupKey' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k6mAfOoor4XCPF3P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'translations/{groupKey?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@getIndex',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@getIndex',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::k6mAfOoor4XCPF3P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'groupKey' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yXiEU1XzLYjjREfE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'translations/add/{groupKey}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@postAdd',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@postAdd',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::yXiEU1XzLYjjREfE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'groupKey' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DR7aFwjn4JJ29OQU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'translations/edit/{groupKey}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@postEdit',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@postEdit',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::DR7aFwjn4JJ29OQU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'groupKey' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::28fVhHiHs4HeLUd9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'translations/groups/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@postAddGroup',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@postAddGroup',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::28fVhHiHs4HeLUd9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QHH7hrdyijUCRbLh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'translations/delete/{groupKey}/{translationKey}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@postDelete',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@postDelete',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::QHH7hrdyijUCRbLh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'groupKey' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NkFQXbQxvBpoQM3i' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'translations/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@postImport',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@postImport',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::NkFQXbQxvBpoQM3i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BSp1eHapSMGhucT5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'translations/find',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@postFind',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@postFind',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::BSp1eHapSMGhucT5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::srFs8X72FQGJe7Xs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'translations/locales/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@postAddLocale',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@postAddLocale',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::srFs8X72FQGJe7Xs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LkP4iToX2pTiQLsO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'translations/locales/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@postRemoveLocale',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@postRemoveLocale',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::LkP4iToX2pTiQLsO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bGcrrb8hcyfNeYVI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'translations/publish/{groupKey}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@postPublish',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@postPublish',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::bGcrrb8hcyfNeYVI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'groupKey' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::58lnrAKS7Uvtrk02' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'translations/translate-missing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'Barryvdh\\TranslationManager\\Controller@postTranslateMissing',
        'controller' => 'Barryvdh\\TranslationManager\\Controller@postTranslateMissing',
        'namespace' => 'Barryvdh\\TranslationManager',
        'prefix' => 'translations',
        'where' => 
        array (
        ),
        'as' => 'generated::58lnrAKS7Uvtrk02',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verify-purchase' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-purchase',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\PurchaseVerificationController@verifyPurchase',
        'controller' => 'Froiden\\Envato\\Controllers\\PurchaseVerificationController@verifyPurchase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verify-purchase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-verified' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchase-verified',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\PurchaseVerificationController@purchaseVerified',
        'controller' => 'Froiden\\Envato\\Controllers\\PurchaseVerificationController@purchaseVerified',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase-verified',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hide-review-modal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hide-review-modal/{type}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\PurchaseVerificationController@hideReviewModal',
        'controller' => 'Froiden\\Envato\\Controllers\\PurchaseVerificationController@hideReviewModal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hide-review-modal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update-database',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@updateDatabase',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@updateDatabase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-database',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::exMGnR5Fyu3eQCCH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear-cache',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@clearCache',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@clearCache',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::exMGnR5Fyu3eQCCH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zJohG1i0qarvIZBZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'refresh-cache',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@refreshCache',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@refreshCache',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zJohG1i0qarvIZBZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tQCOgs4H3N3q1W0F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'down/{hash}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@down',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@down',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tQCOgs4H3N3q1W0F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wRf8qbbjfB7erjf2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'up/{hash}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@up',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@up',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wRf8qbbjfB7erjf2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.updateVersion.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update-version/update/{module?}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@update',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@update',
        'as' => 'admin.updateVersion.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.updateVersion.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update-version/download/{module?}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@download',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@download',
        'as' => 'admin.updateVersion.download',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.updateVersion.downloadPercent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update-version/downloadPercent/{module?}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@downloadPercent',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@downloadPercent',
        'as' => 'admin.updateVersion.downloadPercent',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.updateVersion.checkIfFileExtracted' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update-version/checkIfFileExtracted/{module?}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@checkIfFileExtracted',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@checkIfFileExtracted',
        'as' => 'admin.updateVersion.checkIfFileExtracted',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.updateVersion.install' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update-version/install/{module?}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@install',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@install',
        'as' => 'admin.updateVersion.install',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.updateVersion.checkSupport' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update-version/checkSupport/{module?}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@checkSupport',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@checkSupport',
        'as' => 'admin.updateVersion.checkSupport',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.updateVersion.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update-version/refresh/{module?}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@refresh',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@refresh',
        'as' => 'admin.updateVersion.refresh',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.updateVersion.notify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/update-version/notify/{module}',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@notify',
        'controller' => 'Froiden\\Envato\\Controllers\\UpdateScriptVersionController@notify',
        'as' => 'admin.updateVersion.notify',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashier.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe/payment/{id}',
      'action' => 
      array (
        'uses' => 'Laravel\\Cashier\\Http\\Controllers\\PaymentController@show',
        'controller' => 'Laravel\\Cashier\\Http\\Controllers\\PaymentController@show',
        'as' => 'cashier.payment',
        'namespace' => 'Laravel\\Cashier\\Http\\Controllers',
        'prefix' => 'stripe',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashier.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stripe/webhook',
      'action' => 
      array (
        'uses' => 'Laravel\\Cashier\\Http\\Controllers\\WebhookController@handleWebhook',
        'controller' => 'Laravel\\Cashier\\Http\\Controllers\\WebhookController@handleWebhook',
        'as' => 'cashier.webhook',
        'namespace' => 'Laravel\\Cashier\\Http\\Controllers',
        'prefix' => 'stripe',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:login',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-profile-information.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile-information',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-profile-information.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirmed-password-status',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.login.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:two-factor',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.login.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.enable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirmed-two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedTwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedTwoFactorAuthenticationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.disable' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.disable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.qr-code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-qr-code',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.qr-code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.secret-key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-secret-key',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorSecretKeyController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorSecretKeyController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.secret-key',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.recovery-codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.recovery-codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZFZILNVvzc2n3ty6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZFZILNVvzc2n3ty6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/create',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\TeamController@create',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\TeamController@create',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'teams.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'teams.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teams/{team}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\TeamController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\TeamController@show',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'teams.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'current-team.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'current-team',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\CurrentTeamController@update',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\CurrentTeamController@update',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'current-team.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team-invitations.accept' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-invitations/{invitation}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'signed',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\TeamInvitationController@accept',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\TeamInvitationController@accept',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'team-invitations.accept',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/update',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'controller' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'livewire.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::btXddjBe6wrt0x26' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.min.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'controller' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'as' => 'generated::btXddjBe6wrt0x26',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FXq8koa7FiPhiPXx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.min.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@maps',
        'controller' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@maps',
        'as' => 'generated::FXq8koa7FiPhiPXx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'as' => 'livewire.upload-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'as' => 'livewire.preview-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.hosts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/hosts',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.hosts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/folders',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.request-download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/folders/{folderIdentifier}/download/request',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@requestDownload',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@requestDownload',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.request-download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'log-viewer/api/folders/{folderIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.clear-cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'log-viewer/api/folders/{folderIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.request-download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/files/{fileIdentifier}/download/request',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@requestDownload',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@requestDownload',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.request-download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'log-viewer/api/files/{fileIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'log-viewer/api/files/{fileIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache-all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'log-viewer/api/clear-cache-all',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache-all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.delete-multiple-files' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'log-viewer/api/delete-multiple-files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete-multiple-files',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/logs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
          3 => 'Opcodes\\LogViewer\\Http\\Middleware\\JsonResourceWithoutWrappingMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.logs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/folders/{folderIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/api/files/{fileIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          3 => 'App\\Http\\Middleware\\SuperAdmin',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'log-viewer',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BOwij1y4fuqQnHhf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test-connection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\DesktopUniqueKeyMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PrintJobController@testConnection',
        'controller' => 'App\\Http\\Controllers\\PrintJobController@testConnection',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BOwij1y4fuqQnHhf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VJirbDS7BJBKpkV3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/print-jobs/pull',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\DesktopUniqueKeyMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PrintJobController@pull',
        'controller' => 'App\\Http\\Controllers\\PrintJobController@pull',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VJirbDS7BJBKpkV3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yW35A9nuTS2nSQPn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/print-jobs/pull-multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\DesktopUniqueKeyMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PrintJobController@pullMultiple',
        'controller' => 'App\\Http\\Controllers\\PrintJobController@pullMultiple',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yW35A9nuTS2nSQPn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Hm3I3NDdGKikNui' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/printer-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\DesktopUniqueKeyMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PrintJobController@printerDetails',
        'controller' => 'App\\Http\\Controllers\\PrintJobController@printerDetails',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8Hm3I3NDdGKikNui',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZYJP6tAtl9OstKsm' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/print-jobs/{printJob}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\DesktopUniqueKeyMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PrintJobController@update',
        'controller' => 'App\\Http\\Controllers\\PrintJobController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZYJP6tAtl9OstKsm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ipEXd78OIcht6Mzu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/print-jobs/printer/{printerId}/jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\DesktopUniqueKeyMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PrintJobController@getPrinterJobs',
        'controller' => 'App\\Http\\Controllers\\PrintJobController@getPrinterJobs',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ipEXd78OIcht6Mzu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VxgjsBI3AW9MaNxJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/print-jobs/{printJobId}/complete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\DesktopUniqueKeyMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PrintJobController@complete',
        'controller' => 'App\\Http\\Controllers\\PrintJobController@complete',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VxgjsBI3AW9MaNxJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kJb8qhMCmRHuj4ch' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/print-jobs/{printJobId}/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\DesktopUniqueKeyMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PrintJobController@failed',
        'controller' => 'App\\Http\\Controllers\\PrintJobController@failed',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kJb8qhMCmRHuj4ch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WKyq1NqaCxT7LKQF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/print-jobs/pending/{printId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'App\\Http\\Middleware\\DesktopUniqueKeyMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PrintJobController@pending',
        'controller' => 'App\\Http\\Controllers\\PrintJobController@pending',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WKyq1NqaCxT7LKQF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e3XTbUKbM374pQqJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'up',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:841:"function () {
                    $exception = null;

                    try {
                        \\Illuminate\\Support\\Facades\\Event::dispatch(new \\Illuminate\\Foundation\\Events\\DiagnosingHealth);
                    } catch (\\Throwable $e) {
                        if (app()->hasDebugModeEnabled()) {
                            throw $e;
                        }

                        report($e);

                        $exception = $e->getMessage();
                    }

                    return response(\\Illuminate\\Support\\Facades\\View::file(\'/home/u820925064/domains/nibble.fit/public_html/vendor/laravel/framework/src/Illuminate/Foundation/Configuration\'.\'/../resources/health-up.blade.php\', [
                        \'exception\' => $exception,
                    ]), status: $exception ? 500 : 200);
                }";s:5:"scope";s:54:"Illuminate\\Foundation\\Configuration\\ApplicationBuilder";s:4:"this";N;s:4:"self";s:32:"00000000000010be0000000000000000";}}',
        'as' => 'generated::e3XTbUKbM374pQqJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manifest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manifest.json',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@manifest',
        'controller' => 'App\\Http\\Controllers\\HomeController@manifest',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'manifest',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'App\\Http\\Middleware\\DisableFrontend',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@landing',
        'controller' => 'App\\Http\\Controllers\\HomeController@landing',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'restaurant_signup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant-signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@signup',
        'controller' => 'App\\Http\\Controllers\\HomeController@signup',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'restaurant_signup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer_logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer-logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@customerLogout',
        'controller' => 'App\\Http\\Controllers\\HomeController@customerLogout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer_logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customMenu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomMenuController@index',
        'controller' => 'App\\Http\\Controllers\\CustomMenuController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customMenu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'table_order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant/table/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'customer.site.locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopController@tableOrder',
        'controller' => 'App\\Http\\Controllers\\ShopController@tableOrder',
        'namespace' => NULL,
        'prefix' => '/restaurant',
        'where' => 
        array (
        ),
        'as' => 'table_order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'my_orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant/my-orders/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'customer.site.locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopController@myOrders',
        'controller' => 'App\\Http\\Controllers\\ShopController@myOrders',
        'namespace' => NULL,
        'prefix' => '/restaurant',
        'where' => 
        array (
        ),
        'as' => 'my_orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'my_bookings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant/my-bookings/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'customer.site.locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopController@myBookings',
        'controller' => 'App\\Http\\Controllers\\ShopController@myBookings',
        'namespace' => NULL,
        'prefix' => '/restaurant',
        'where' => 
        array (
        ),
        'as' => 'my_bookings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'my_addresses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant/my-addresses/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'customer.site.locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopController@myAddresses',
        'controller' => 'App\\Http\\Controllers\\ShopController@myAddresses',
        'namespace' => NULL,
        'prefix' => '/restaurant',
        'where' => 
        array (
        ),
        'as' => 'my_addresses',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'book_a_table' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant/book-a-table/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'customer.site.locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopController@bookTable',
        'controller' => 'App\\Http\\Controllers\\ShopController@bookTable',
        'namespace' => NULL,
        'prefix' => '/restaurant',
        'where' => 
        array (
        ),
        'as' => 'book_a_table',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant/contact/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'customer.site.locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopController@contact',
        'controller' => 'App\\Http\\Controllers\\ShopController@contact',
        'namespace' => NULL,
        'prefix' => '/restaurant',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant/about-us/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'customer.site.locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopController@about',
        'controller' => 'App\\Http\\Controllers\\ShopController@about',
        'namespace' => NULL,
        'prefix' => '/restaurant',
        'where' => 
        array (
        ),
        'as' => 'about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant/profile/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'customer.site.locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopController@profile',
        'controller' => 'App\\Http\\Controllers\\ShopController@profile',
        'namespace' => NULL,
        'prefix' => '/restaurant',
        'where' => 
        array (
        ),
        'as' => 'profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'order_success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant/orders-success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'customer.site.locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopController@orderSuccess',
        'controller' => 'App\\Http\\Controllers\\ShopController@orderSuccess',
        'namespace' => NULL,
        'prefix' => '/restaurant',
        'where' => 
        array (
        ),
        'as' => 'order_success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop_restaurant' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
          3 => 'customer.site.locale',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopController@cart',
        'controller' => 'App\\Http\\Controllers\\ShopController@cart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop_restaurant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stripe.order_payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stripe/order-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@orderPayment',
        'controller' => 'App\\Http\\Controllers\\StripeController@orderPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stripe.order_payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stripe.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe/success-callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@success',
        'controller' => 'App\\Http\\Controllers\\StripeController@success',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stripe.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stripe.license_payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stripe/license-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@licensePayment',
        'controller' => 'App\\Http\\Controllers\\StripeController@licensePayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stripe.license_payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stripe.license_success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe/license-success-callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@licenseSuccess',
        'controller' => 'App\\Http\\Controllers\\StripeController@licenseSuccess',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stripe.license_success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'flutterwave.initiate-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'flutterwave/initiate-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\FlutterwaveController@initiatePayment',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\FlutterwaveController@initiatePayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'flutterwave.initiate-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'flutterwave.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'flutterwave/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\FlutterwaveController@paymentCallback',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\FlutterwaveController@paymentCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'flutterwave.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.initiate-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paypal/initiate-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PaypalController@initiatePayment',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PaypalController@initiatePayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paypal.initiate-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'billing.paypal-recurring' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'billing/paypal-recurring',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PaypalController@payWithPaypalRecurrring',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PaypalController@payWithPaypalRecurrring',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'billing.paypal-recurring',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.lifetime.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/lifetime/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PaypalController@paypalLifetimeSuccess',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PaypalController@paypalLifetimeSuccess',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paypal.lifetime.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payfast.initiate-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payfast/initiate-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PayfastController@initiatePayfastPayment',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PayfastController@initiatePayfastPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payfast.initiate-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'billing.payfast-success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'billing/payfast-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PayfastController@payFastPaymentSuccess',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PayfastController@payFastPaymentSuccess',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'billing.payfast-success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'billing.payfast-cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'billing/payfast-cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PayfastController@payFastPaymentCancel',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PayfastController@payFastPaymentCancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'billing.payfast-cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paystack.initiate-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paystack/initiate-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PaystackController@initiatePaystackPayment',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PaystackController@initiatePaystackPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paystack.initiate-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paystack.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paystack/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'clear.customer.language',
          2 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PaystackController@handleGatewayCallback',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PaystackController@handleGatewayCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paystack.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'account_unverified' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account_unverified',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@accountUnverified',
        'controller' => 'App\\Http\\Controllers\\DashboardController@accountUnverified',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'account_unverified',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'onboarding_steps' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'onboarding-steps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\OnboardingStepController@index',
        'controller' => 'App\\Http\\Controllers\\OnboardingStepController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'onboarding_steps',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menus.index',
        'uses' => 'App\\Http\\Controllers\\MenuController@index',
        'controller' => 'App\\Http\\Controllers\\MenuController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menus.create',
        'uses' => 'App\\Http\\Controllers\\MenuController@create',
        'controller' => 'App\\Http\\Controllers\\MenuController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menus.store',
        'uses' => 'App\\Http\\Controllers\\MenuController@store',
        'controller' => 'App\\Http\\Controllers\\MenuController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menus.show',
        'uses' => 'App\\Http\\Controllers\\MenuController@show',
        'controller' => 'App\\Http\\Controllers\\MenuController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menus/{menu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menus.edit',
        'uses' => 'App\\Http\\Controllers\\MenuController@edit',
        'controller' => 'App\\Http\\Controllers\\MenuController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menus.update',
        'uses' => 'App\\Http\\Controllers\\MenuController@update',
        'controller' => 'App\\Http\\Controllers\\MenuController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menus.destroy',
        'uses' => 'App\\Http\\Controllers\\MenuController@destroy',
        'controller' => 'App\\Http\\Controllers\\MenuController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu-items.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menu-items.index',
        'uses' => 'App\\Http\\Controllers\\MenuItemController@index',
        'controller' => 'App\\Http\\Controllers\\MenuItemController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu-items.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu-items/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menu-items.create',
        'uses' => 'App\\Http\\Controllers\\MenuItemController@create',
        'controller' => 'App\\Http\\Controllers\\MenuItemController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu-items.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'menu-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menu-items.store',
        'uses' => 'App\\Http\\Controllers\\MenuItemController@store',
        'controller' => 'App\\Http\\Controllers\\MenuItemController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu-items.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu-items/{menu_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menu-items.show',
        'uses' => 'App\\Http\\Controllers\\MenuItemController@show',
        'controller' => 'App\\Http\\Controllers\\MenuItemController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu-items.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'menu-items/{menu_item}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menu-items.edit',
        'uses' => 'App\\Http\\Controllers\\MenuItemController@edit',
        'controller' => 'App\\Http\\Controllers\\MenuItemController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu-items.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'menu-items/{menu_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menu-items.update',
        'uses' => 'App\\Http\\Controllers\\MenuItemController@update',
        'controller' => 'App\\Http\\Controllers\\MenuItemController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menu-items.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'menu-items/{menu_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'menu-items.destroy',
        'uses' => 'App\\Http\\Controllers\\MenuItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\MenuItemController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'item-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-categories.index',
        'uses' => 'App\\Http\\Controllers\\ItemCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\ItemCategoryController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'item-categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-categories.create',
        'uses' => 'App\\Http\\Controllers\\ItemCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\ItemCategoryController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'item-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-categories.store',
        'uses' => 'App\\Http\\Controllers\\ItemCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\ItemCategoryController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'item-categories/{item_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-categories.show',
        'uses' => 'App\\Http\\Controllers\\ItemCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\ItemCategoryController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'item-categories/{item_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-categories.edit',
        'uses' => 'App\\Http\\Controllers\\ItemCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\ItemCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'item-categories/{item_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-categories.update',
        'uses' => 'App\\Http\\Controllers\\ItemCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\ItemCategoryController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'item-categories/{item_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-categories.destroy',
        'uses' => 'App\\Http\\Controllers\\ItemCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\ItemCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-modifiers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'item-modifiers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-modifiers.index',
        'uses' => 'App\\Http\\Controllers\\ItemModifierController@index',
        'controller' => 'App\\Http\\Controllers\\ItemModifierController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-modifiers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'item-modifiers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-modifiers.create',
        'uses' => 'App\\Http\\Controllers\\ItemModifierController@create',
        'controller' => 'App\\Http\\Controllers\\ItemModifierController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-modifiers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'item-modifiers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-modifiers.store',
        'uses' => 'App\\Http\\Controllers\\ItemModifierController@store',
        'controller' => 'App\\Http\\Controllers\\ItemModifierController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-modifiers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'item-modifiers/{item_modifier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-modifiers.show',
        'uses' => 'App\\Http\\Controllers\\ItemModifierController@show',
        'controller' => 'App\\Http\\Controllers\\ItemModifierController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-modifiers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'item-modifiers/{item_modifier}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-modifiers.edit',
        'uses' => 'App\\Http\\Controllers\\ItemModifierController@edit',
        'controller' => 'App\\Http\\Controllers\\ItemModifierController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-modifiers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'item-modifiers/{item_modifier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-modifiers.update',
        'uses' => 'App\\Http\\Controllers\\ItemModifierController@update',
        'controller' => 'App\\Http\\Controllers\\ItemModifierController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'item-modifiers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'item-modifiers/{item_modifier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'item-modifiers.destroy',
        'uses' => 'App\\Http\\Controllers\\ItemModifierController@destroy',
        'controller' => 'App\\Http\\Controllers\\ItemModifierController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifier-groups.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modifier-groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'modifier-groups.index',
        'uses' => 'App\\Http\\Controllers\\ModifierGroupController@index',
        'controller' => 'App\\Http\\Controllers\\ModifierGroupController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifier-groups.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modifier-groups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'modifier-groups.create',
        'uses' => 'App\\Http\\Controllers\\ModifierGroupController@create',
        'controller' => 'App\\Http\\Controllers\\ModifierGroupController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifier-groups.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'modifier-groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'modifier-groups.store',
        'uses' => 'App\\Http\\Controllers\\ModifierGroupController@store',
        'controller' => 'App\\Http\\Controllers\\ModifierGroupController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifier-groups.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modifier-groups/{modifier_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'modifier-groups.show',
        'uses' => 'App\\Http\\Controllers\\ModifierGroupController@show',
        'controller' => 'App\\Http\\Controllers\\ModifierGroupController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifier-groups.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'modifier-groups/{modifier_group}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'modifier-groups.edit',
        'uses' => 'App\\Http\\Controllers\\ModifierGroupController@edit',
        'controller' => 'App\\Http\\Controllers\\ModifierGroupController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifier-groups.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'modifier-groups/{modifier_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'modifier-groups.update',
        'uses' => 'App\\Http\\Controllers\\ModifierGroupController@update',
        'controller' => 'App\\Http\\Controllers\\ModifierGroupController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'modifier-groups.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'modifier-groups/{modifier_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'modifier-groups.destroy',
        'uses' => 'App\\Http\\Controllers\\ModifierGroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\ModifierGroupController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'entities.sort' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sort-entities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\MenuController@unifiedSort',
        'controller' => 'App\\Http\\Controllers\\MenuController@unifiedSort',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'entities.sort',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'areas.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'areas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'areas.index',
        'uses' => 'App\\Http\\Controllers\\AreaController@index',
        'controller' => 'App\\Http\\Controllers\\AreaController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'areas.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'areas/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'areas.create',
        'uses' => 'App\\Http\\Controllers\\AreaController@create',
        'controller' => 'App\\Http\\Controllers\\AreaController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'areas.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'areas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'areas.store',
        'uses' => 'App\\Http\\Controllers\\AreaController@store',
        'controller' => 'App\\Http\\Controllers\\AreaController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'areas.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'areas/{area}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'areas.show',
        'uses' => 'App\\Http\\Controllers\\AreaController@show',
        'controller' => 'App\\Http\\Controllers\\AreaController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'areas.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'areas/{area}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'areas.edit',
        'uses' => 'App\\Http\\Controllers\\AreaController@edit',
        'controller' => 'App\\Http\\Controllers\\AreaController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'areas.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'areas/{area}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'areas.update',
        'uses' => 'App\\Http\\Controllers\\AreaController@update',
        'controller' => 'App\\Http\\Controllers\\AreaController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'areas.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'areas/{area}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'areas.destroy',
        'uses' => 'App\\Http\\Controllers\\AreaController@destroy',
        'controller' => 'App\\Http\\Controllers\\AreaController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'tables.index',
        'uses' => 'App\\Http\\Controllers\\TableController@index',
        'controller' => 'App\\Http\\Controllers\\TableController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tables/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'tables.create',
        'uses' => 'App\\Http\\Controllers\\TableController@create',
        'controller' => 'App\\Http\\Controllers\\TableController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'tables.store',
        'uses' => 'App\\Http\\Controllers\\TableController@store',
        'controller' => 'App\\Http\\Controllers\\TableController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tables/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'tables.show',
        'uses' => 'App\\Http\\Controllers\\TableController@show',
        'controller' => 'App\\Http\\Controllers\\TableController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tables/{table}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'tables.edit',
        'uses' => 'App\\Http\\Controllers\\TableController@edit',
        'controller' => 'App\\Http\\Controllers\\TableController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'tables/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'tables.update',
        'uses' => 'App\\Http\\Controllers\\TableController@update',
        'controller' => 'App\\Http\\Controllers\\TableController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'tables/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'tables.destroy',
        'uses' => 'App\\Http\\Controllers\\TableController@destroy',
        'controller' => 'App\\Http\\Controllers\\TableController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/print/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderController@printOrder',
        'controller' => 'App\\Http\\Controllers\\OrderController@printOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'orders.print',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'orders.index',
        'uses' => 'App\\Http\\Controllers\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\OrderController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'orders.create',
        'uses' => 'App\\Http\\Controllers\\OrderController@create',
        'controller' => 'App\\Http\\Controllers\\OrderController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'orders.store',
        'uses' => 'App\\Http\\Controllers\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\OrderController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'orders.show',
        'uses' => 'App\\Http\\Controllers\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\OrderController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders/{order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'orders.edit',
        'uses' => 'App\\Http\\Controllers\\OrderController@edit',
        'controller' => 'App\\Http\\Controllers\\OrderController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'orders.update',
        'uses' => 'App\\Http\\Controllers\\OrderController@update',
        'controller' => 'App\\Http\\Controllers\\OrderController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'orders.destroy',
        'uses' => 'App\\Http\\Controllers\\OrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\OrderController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos/order/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@order',
        'controller' => 'App\\Http\\Controllers\\PosController@order',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pos.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.kot' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos/kot/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@kot',
        'controller' => 'App\\Http\\Controllers\\PosController@kot',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pos.kot',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'pos.index',
        'uses' => 'App\\Http\\Controllers\\PosController@index',
        'controller' => 'App\\Http\\Controllers\\PosController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'pos.create',
        'uses' => 'App\\Http\\Controllers\\PosController@create',
        'controller' => 'App\\Http\\Controllers\\PosController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'pos.store',
        'uses' => 'App\\Http\\Controllers\\PosController@store',
        'controller' => 'App\\Http\\Controllers\\PosController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos/{po}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'pos.show',
        'uses' => 'App\\Http\\Controllers\\PosController@show',
        'controller' => 'App\\Http\\Controllers\\PosController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos/{po}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'pos.edit',
        'uses' => 'App\\Http\\Controllers\\PosController@edit',
        'controller' => 'App\\Http\\Controllers\\PosController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'pos/{po}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'pos.update',
        'uses' => 'App\\Http\\Controllers\\PosController@update',
        'controller' => 'App\\Http\\Controllers\\PosController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pos.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'pos/{po}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'pos.destroy',
        'uses' => 'App\\Http\\Controllers\\PosController@destroy',
        'controller' => 'App\\Http\\Controllers\\PosController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kots.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kots',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'kots.index',
        'uses' => 'App\\Http\\Controllers\\KotController@index',
        'controller' => 'App\\Http\\Controllers\\KotController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kots.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kots/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'kots.create',
        'uses' => 'App\\Http\\Controllers\\KotController@create',
        'controller' => 'App\\Http\\Controllers\\KotController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kots.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'kots',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'kots.store',
        'uses' => 'App\\Http\\Controllers\\KotController@store',
        'controller' => 'App\\Http\\Controllers\\KotController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kots.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kots/{kot}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'kots.show',
        'uses' => 'App\\Http\\Controllers\\KotController@show',
        'controller' => 'App\\Http\\Controllers\\KotController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kots.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kots/{kot}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'kots.edit',
        'uses' => 'App\\Http\\Controllers\\KotController@edit',
        'controller' => 'App\\Http\\Controllers\\KotController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kots.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'kots/{kot}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'kots.update',
        'uses' => 'App\\Http\\Controllers\\KotController@update',
        'controller' => 'App\\Http\\Controllers\\KotController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kots.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'kots/{kot}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'kots.destroy',
        'uses' => 'App\\Http\\Controllers\\KotController@destroy',
        'controller' => 'App\\Http\\Controllers\\KotController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'kot.print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kot/print/{id}/{kotPlaceid?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\KotController@printkot',
        'controller' => 'App\\Http\\Controllers\\KotController@printkot',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'kot.print',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'customers.index',
        'uses' => 'App\\Http\\Controllers\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'customers.create',
        'uses' => 'App\\Http\\Controllers\\CustomerController@create',
        'controller' => 'App\\Http\\Controllers\\CustomerController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'customers.store',
        'uses' => 'App\\Http\\Controllers\\CustomerController@store',
        'controller' => 'App\\Http\\Controllers\\CustomerController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'customers.show',
        'uses' => 'App\\Http\\Controllers\\CustomerController@show',
        'controller' => 'App\\Http\\Controllers\\CustomerController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customers/{customer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'customers.edit',
        'uses' => 'App\\Http\\Controllers\\CustomerController@edit',
        'controller' => 'App\\Http\\Controllers\\CustomerController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'customers/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'customers.update',
        'uses' => 'App\\Http\\Controllers\\CustomerController@update',
        'controller' => 'App\\Http\\Controllers\\CustomerController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customers/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'customers.destroy',
        'uses' => 'App\\Http\\Controllers\\CustomerController@destroy',
        'controller' => 'App\\Http\\Controllers\\CustomerController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'settings.index',
        'uses' => 'App\\Http\\Controllers\\RestaurantSettingController@index',
        'controller' => 'App\\Http\\Controllers\\RestaurantSettingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'settings.create',
        'uses' => 'App\\Http\\Controllers\\RestaurantSettingController@create',
        'controller' => 'App\\Http\\Controllers\\RestaurantSettingController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'settings.store',
        'uses' => 'App\\Http\\Controllers\\RestaurantSettingController@store',
        'controller' => 'App\\Http\\Controllers\\RestaurantSettingController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'settings.show',
        'uses' => 'App\\Http\\Controllers\\RestaurantSettingController@show',
        'controller' => 'App\\Http\\Controllers\\RestaurantSettingController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'settings/{setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'settings.edit',
        'uses' => 'App\\Http\\Controllers\\RestaurantSettingController@edit',
        'controller' => 'App\\Http\\Controllers\\RestaurantSettingController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'settings.update',
        'uses' => 'App\\Http\\Controllers\\RestaurantSettingController@update',
        'controller' => 'App\\Http\\Controllers\\RestaurantSettingController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'settings.destroy',
        'uses' => 'App\\Http\\Controllers\\RestaurantSettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\RestaurantSettingController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:134:"fn() => \\Maatwebsite\\Excel\\Facades\\Excel::download(new \\App\\Exports\\PaymentExport, \'payments-\' . \\now()->toDateTimeString() . \'.xlsx\')";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000101e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payments.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payments.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'payments.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.due' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/due',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payments.due',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'payments.due',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.expenses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payments.expenses',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'payments.expenses',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payments.expenseCategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/expenseCategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payments.expenseCategory',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'payments.expenseCategory ',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'qrcodes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'qr-codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'qrcodes.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'qrcodes.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reservations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reservations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'reservations.index',
        'uses' => 'App\\Http\\Controllers\\ReservationController@index',
        'controller' => 'App\\Http\\Controllers\\ReservationController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reservations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reservations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'reservations.create',
        'uses' => 'App\\Http\\Controllers\\ReservationController@create',
        'controller' => 'App\\Http\\Controllers\\ReservationController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reservations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reservations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'reservations.store',
        'uses' => 'App\\Http\\Controllers\\ReservationController@store',
        'controller' => 'App\\Http\\Controllers\\ReservationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reservations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reservations/{reservation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'reservations.show',
        'uses' => 'App\\Http\\Controllers\\ReservationController@show',
        'controller' => 'App\\Http\\Controllers\\ReservationController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reservations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reservations/{reservation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'reservations.edit',
        'uses' => 'App\\Http\\Controllers\\ReservationController@edit',
        'controller' => 'App\\Http\\Controllers\\ReservationController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reservations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'reservations/{reservation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'reservations.update',
        'uses' => 'App\\Http\\Controllers\\ReservationController@update',
        'controller' => 'App\\Http\\Controllers\\ReservationController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reservations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'reservations/{reservation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'reservations.destroy',
        'uses' => 'App\\Http\\Controllers\\ReservationController@destroy',
        'controller' => 'App\\Http\\Controllers\\ReservationController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.item' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/item-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/reports',
        'where' => 
        array (
        ),
        'as' => 'reports.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'reports.items',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/category-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/reports',
        'where' => 
        array (
        ),
        'as' => 'reports.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'reports.category',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.sales' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/sales-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/reports',
        'where' => 
        array (
        ),
        'as' => 'reports.sales',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'reports.sales',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.expenseReports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/expense-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/reports',
        'where' => 
        array (
        ),
        'as' => 'reports.expenseReports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'reports.expense-reports',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.outstandingPayment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/outstanding-payment-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/reports',
        'where' => 
        array (
        ),
        'as' => 'reports.outstandingPayment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'reports.outstanding-payment',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.expensesummaryreport' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/expense-summary-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/reports',
        'where' => 
        array (
        ),
        'as' => 'reports.expensesummaryreport',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'reports.expense-summary',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.printLog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/print-log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/reports',
        'where' => 
        array (
        ),
        'as' => 'reports.printLog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'reports.print-log',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'staff.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'staff.index',
        'uses' => 'App\\Http\\Controllers\\StaffController@index',
        'controller' => 'App\\Http\\Controllers\\StaffController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'staff.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'staff.create',
        'uses' => 'App\\Http\\Controllers\\StaffController@create',
        'controller' => 'App\\Http\\Controllers\\StaffController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'staff.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'staff.store',
        'uses' => 'App\\Http\\Controllers\\StaffController@store',
        'controller' => 'App\\Http\\Controllers\\StaffController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'staff.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff/{staff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'staff.show',
        'uses' => 'App\\Http\\Controllers\\StaffController@show',
        'controller' => 'App\\Http\\Controllers\\StaffController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'staff.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff/{staff}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'staff.edit',
        'uses' => 'App\\Http\\Controllers\\StaffController@edit',
        'controller' => 'App\\Http\\Controllers\\StaffController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'staff.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'staff/{staff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'staff.update',
        'uses' => 'App\\Http\\Controllers\\StaffController@update',
        'controller' => 'App\\Http\\Controllers\\StaffController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'staff.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'staff/{staff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'staff.destroy',
        'uses' => 'App\\Http\\Controllers\\StaffController@destroy',
        'controller' => 'App\\Http\\Controllers\\StaffController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery-executives.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delivery-executives',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'delivery-executives.index',
        'uses' => 'App\\Http\\Controllers\\DeliveryExecutiveController@index',
        'controller' => 'App\\Http\\Controllers\\DeliveryExecutiveController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery-executives.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delivery-executives/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'delivery-executives.create',
        'uses' => 'App\\Http\\Controllers\\DeliveryExecutiveController@create',
        'controller' => 'App\\Http\\Controllers\\DeliveryExecutiveController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery-executives.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delivery-executives',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'delivery-executives.store',
        'uses' => 'App\\Http\\Controllers\\DeliveryExecutiveController@store',
        'controller' => 'App\\Http\\Controllers\\DeliveryExecutiveController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery-executives.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delivery-executives/{delivery_executive}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'delivery-executives.show',
        'uses' => 'App\\Http\\Controllers\\DeliveryExecutiveController@show',
        'controller' => 'App\\Http\\Controllers\\DeliveryExecutiveController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery-executives.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delivery-executives/{delivery_executive}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'delivery-executives.edit',
        'uses' => 'App\\Http\\Controllers\\DeliveryExecutiveController@edit',
        'controller' => 'App\\Http\\Controllers\\DeliveryExecutiveController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery-executives.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'delivery-executives/{delivery_executive}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'delivery-executives.update',
        'uses' => 'App\\Http\\Controllers\\DeliveryExecutiveController@update',
        'controller' => 'App\\Http\\Controllers\\DeliveryExecutiveController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery-executives.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delivery-executives/{delivery_executive}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'delivery-executives.destroy',
        'uses' => 'App\\Http\\Controllers\\DeliveryExecutiveController@destroy',
        'controller' => 'App\\Http\\Controllers\\DeliveryExecutiveController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pricing.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'billing/upgrade-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'pricing.plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'plans.index',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'beam_auth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pusher/beams-auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@beamAuth',
        'controller' => 'App\\Http\\Controllers\\DashboardController@beamAuth',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'beam_auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'waiter-requests.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'waiter-requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'waiter-requests.index',
        'uses' => 'App\\Http\\Controllers\\WaiterRequestController@index',
        'controller' => 'App\\Http\\Controllers\\WaiterRequestController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'waiter-requests.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'waiter-requests/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'waiter-requests.create',
        'uses' => 'App\\Http\\Controllers\\WaiterRequestController@create',
        'controller' => 'App\\Http\\Controllers\\WaiterRequestController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'waiter-requests.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'waiter-requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'waiter-requests.store',
        'uses' => 'App\\Http\\Controllers\\WaiterRequestController@store',
        'controller' => 'App\\Http\\Controllers\\WaiterRequestController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'waiter-requests.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'waiter-requests/{waiter_request}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'waiter-requests.show',
        'uses' => 'App\\Http\\Controllers\\WaiterRequestController@show',
        'controller' => 'App\\Http\\Controllers\\WaiterRequestController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'waiter-requests.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'waiter-requests/{waiter_request}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'waiter-requests.edit',
        'uses' => 'App\\Http\\Controllers\\WaiterRequestController@edit',
        'controller' => 'App\\Http\\Controllers\\WaiterRequestController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'waiter-requests.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'waiter-requests/{waiter_request}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'waiter-requests.update',
        'uses' => 'App\\Http\\Controllers\\WaiterRequestController@update',
        'controller' => 'App\\Http\\Controllers\\WaiterRequestController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'waiter-requests.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'waiter-requests/{waiter_request}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'waiter-requests.destroy',
        'uses' => 'App\\Http\\Controllers\\WaiterRequestController@destroy',
        'controller' => 'App\\Http\\Controllers\\WaiterRequestController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.display' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer-display',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'clear.customer.language',
          5 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\PosController@customerDisplay',
        'controller' => 'App\\Http\\Controllers\\PosController@customerDisplay',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.display',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'super-admin-dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@superadmin',
        'controller' => 'App\\Http\\Controllers\\DashboardController@superadmin',
        'as' => 'superadmin.dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurants.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurants',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurants.index',
        'uses' => 'App\\Http\\Controllers\\RestaurantController@index',
        'controller' => 'App\\Http\\Controllers\\RestaurantController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurants.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurants/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurants.create',
        'uses' => 'App\\Http\\Controllers\\RestaurantController@create',
        'controller' => 'App\\Http\\Controllers\\RestaurantController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurants.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'restaurants',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurants.store',
        'uses' => 'App\\Http\\Controllers\\RestaurantController@store',
        'controller' => 'App\\Http\\Controllers\\RestaurantController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurants.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurants/{restaurant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurants.show',
        'uses' => 'App\\Http\\Controllers\\RestaurantController@show',
        'controller' => 'App\\Http\\Controllers\\RestaurantController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurants.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurants/{restaurant}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurants.edit',
        'uses' => 'App\\Http\\Controllers\\RestaurantController@edit',
        'controller' => 'App\\Http\\Controllers\\RestaurantController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurants.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'restaurants/{restaurant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurants.update',
        'uses' => 'App\\Http\\Controllers\\RestaurantController@update',
        'controller' => 'App\\Http\\Controllers\\RestaurantController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurants.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'restaurants/{restaurant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurants.destroy',
        'uses' => 'App\\Http\\Controllers\\RestaurantController@destroy',
        'controller' => 'App\\Http\\Controllers\\RestaurantController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurant-payments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant-payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurant-payments.index',
        'uses' => 'App\\Http\\Controllers\\RestaurantPaymentController@index',
        'controller' => 'App\\Http\\Controllers\\RestaurantPaymentController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurant-payments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant-payments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurant-payments.create',
        'uses' => 'App\\Http\\Controllers\\RestaurantPaymentController@create',
        'controller' => 'App\\Http\\Controllers\\RestaurantPaymentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurant-payments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'restaurant-payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurant-payments.store',
        'uses' => 'App\\Http\\Controllers\\RestaurantPaymentController@store',
        'controller' => 'App\\Http\\Controllers\\RestaurantPaymentController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurant-payments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant-payments/{restaurant_payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurant-payments.show',
        'uses' => 'App\\Http\\Controllers\\RestaurantPaymentController@show',
        'controller' => 'App\\Http\\Controllers\\RestaurantPaymentController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurant-payments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'restaurant-payments/{restaurant_payment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurant-payments.edit',
        'uses' => 'App\\Http\\Controllers\\RestaurantPaymentController@edit',
        'controller' => 'App\\Http\\Controllers\\RestaurantPaymentController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurant-payments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'restaurant-payments/{restaurant_payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurant-payments.update',
        'uses' => 'App\\Http\\Controllers\\RestaurantPaymentController@update',
        'controller' => 'App\\Http\\Controllers\\RestaurantPaymentController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.restaurant-payments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'restaurant-payments/{restaurant_payment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.restaurant-payments.destroy',
        'uses' => 'App\\Http\\Controllers\\RestaurantPaymentController@destroy',
        'controller' => 'App\\Http\\Controllers\\RestaurantPaymentController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.packages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'packages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.packages.index',
        'uses' => 'App\\Http\\Controllers\\PackageController@index',
        'controller' => 'App\\Http\\Controllers\\PackageController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.packages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'packages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.packages.create',
        'uses' => 'App\\Http\\Controllers\\PackageController@create',
        'controller' => 'App\\Http\\Controllers\\PackageController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.packages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'packages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.packages.store',
        'uses' => 'App\\Http\\Controllers\\PackageController@store',
        'controller' => 'App\\Http\\Controllers\\PackageController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.packages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'packages/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.packages.show',
        'uses' => 'App\\Http\\Controllers\\PackageController@show',
        'controller' => 'App\\Http\\Controllers\\PackageController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.packages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'packages/{package}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.packages.edit',
        'uses' => 'App\\Http\\Controllers\\PackageController@edit',
        'controller' => 'App\\Http\\Controllers\\PackageController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.packages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'packages/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.packages.update',
        'uses' => 'App\\Http\\Controllers\\PackageController@update',
        'controller' => 'App\\Http\\Controllers\\PackageController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.packages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'packages/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.packages.destroy',
        'uses' => 'App\\Http\\Controllers\\PackageController@destroy',
        'controller' => 'App\\Http\\Controllers\\PackageController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.invoices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.invoices.index',
        'uses' => 'App\\Http\\Controllers\\BillingController@index',
        'controller' => 'App\\Http\\Controllers\\BillingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.invoices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoices/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.invoices.create',
        'uses' => 'App\\Http\\Controllers\\BillingController@create',
        'controller' => 'App\\Http\\Controllers\\BillingController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.invoices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.invoices.store',
        'uses' => 'App\\Http\\Controllers\\BillingController@store',
        'controller' => 'App\\Http\\Controllers\\BillingController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.invoices.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.invoices.show',
        'uses' => 'App\\Http\\Controllers\\BillingController@show',
        'controller' => 'App\\Http\\Controllers\\BillingController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.invoices.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'invoices/{invoice}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.invoices.edit',
        'uses' => 'App\\Http\\Controllers\\BillingController@edit',
        'controller' => 'App\\Http\\Controllers\\BillingController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.invoices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.invoices.update',
        'uses' => 'App\\Http\\Controllers\\BillingController@update',
        'controller' => 'App\\Http\\Controllers\\BillingController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.invoices.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'invoices/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.invoices.destroy',
        'uses' => 'App\\Http\\Controllers\\BillingController@destroy',
        'controller' => 'App\\Http\\Controllers\\BillingController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.offline-plan-request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'offline-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\BillingController@offlinePlanRequests',
        'controller' => 'App\\Http\\Controllers\\BillingController@offlinePlanRequests',
        'as' => 'superadmin.offline-plan-request',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.superadmin-settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.superadmin-settings.index',
        'uses' => 'App\\Http\\Controllers\\SuperadminSettingController@index',
        'controller' => 'App\\Http\\Controllers\\SuperadminSettingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.superadmin-settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin-settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.superadmin-settings.create',
        'uses' => 'App\\Http\\Controllers\\SuperadminSettingController@create',
        'controller' => 'App\\Http\\Controllers\\SuperadminSettingController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.superadmin-settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'superadmin-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.superadmin-settings.store',
        'uses' => 'App\\Http\\Controllers\\SuperadminSettingController@store',
        'controller' => 'App\\Http\\Controllers\\SuperadminSettingController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.superadmin-settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin-settings/{superadmin_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.superadmin-settings.show',
        'uses' => 'App\\Http\\Controllers\\SuperadminSettingController@show',
        'controller' => 'App\\Http\\Controllers\\SuperadminSettingController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.superadmin-settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'superadmin-settings/{superadmin_setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.superadmin-settings.edit',
        'uses' => 'App\\Http\\Controllers\\SuperadminSettingController@edit',
        'controller' => 'App\\Http\\Controllers\\SuperadminSettingController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.superadmin-settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'superadmin-settings/{superadmin_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.superadmin-settings.update',
        'uses' => 'App\\Http\\Controllers\\SuperadminSettingController@update',
        'controller' => 'App\\Http\\Controllers\\SuperadminSettingController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.superadmin-settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'superadmin-settings/{superadmin_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.superadmin-settings.destroy',
        'uses' => 'App\\Http\\Controllers\\SuperadminSettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\SuperadminSettingController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.app-update.deleteFile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'app-update/deleteFile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\GlobalSettingController@deleteFile',
        'controller' => 'App\\Http\\Controllers\\GlobalSettingController@deleteFile',
        'as' => 'superadmin.app-update.deleteFile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.app-update.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.app-update.index',
        'uses' => 'App\\Http\\Controllers\\GlobalSettingController@index',
        'controller' => 'App\\Http\\Controllers\\GlobalSettingController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.app-update.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app-update/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.app-update.create',
        'uses' => 'App\\Http\\Controllers\\GlobalSettingController@create',
        'controller' => 'App\\Http\\Controllers\\GlobalSettingController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.app-update.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'app-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.app-update.store',
        'uses' => 'App\\Http\\Controllers\\GlobalSettingController@store',
        'controller' => 'App\\Http\\Controllers\\GlobalSettingController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.app-update.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app-update/{app_update}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.app-update.show',
        'uses' => 'App\\Http\\Controllers\\GlobalSettingController@show',
        'controller' => 'App\\Http\\Controllers\\GlobalSettingController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.app-update.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app-update/{app_update}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.app-update.edit',
        'uses' => 'App\\Http\\Controllers\\GlobalSettingController@edit',
        'controller' => 'App\\Http\\Controllers\\GlobalSettingController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.app-update.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'app-update/{app_update}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.app-update.update',
        'uses' => 'App\\Http\\Controllers\\GlobalSettingController@update',
        'controller' => 'App\\Http\\Controllers\\GlobalSettingController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.app-update.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'app-update/{app_update}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.app-update.destroy',
        'uses' => 'App\\Http\\Controllers\\GlobalSettingController@destroy',
        'controller' => 'App\\Http\\Controllers\\GlobalSettingController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.custom-modules.verify_purchase' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'custom-modules/verify-purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomModuleController@verifyingModulePurchase',
        'controller' => 'App\\Http\\Controllers\\CustomModuleController@verifyingModulePurchase',
        'as' => 'superadmin.custom-modules.verify_purchase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.custom-modules.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-modules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.custom-modules.index',
        'uses' => 'App\\Http\\Controllers\\CustomModuleController@index',
        'controller' => 'App\\Http\\Controllers\\CustomModuleController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.custom-modules.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-modules/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.custom-modules.create',
        'uses' => 'App\\Http\\Controllers\\CustomModuleController@create',
        'controller' => 'App\\Http\\Controllers\\CustomModuleController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.custom-modules.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'custom-modules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.custom-modules.store',
        'uses' => 'App\\Http\\Controllers\\CustomModuleController@store',
        'controller' => 'App\\Http\\Controllers\\CustomModuleController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.custom-modules.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-modules/{custom_module}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.custom-modules.show',
        'uses' => 'App\\Http\\Controllers\\CustomModuleController@show',
        'controller' => 'App\\Http\\Controllers\\CustomModuleController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.custom-modules.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-modules/{custom_module}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.custom-modules.edit',
        'uses' => 'App\\Http\\Controllers\\CustomModuleController@edit',
        'controller' => 'App\\Http\\Controllers\\CustomModuleController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.custom-modules.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'custom-modules/{custom_module}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.custom-modules.destroy',
        'uses' => 'App\\Http\\Controllers\\CustomModuleController@destroy',
        'controller' => 'App\\Http\\Controllers\\CustomModuleController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.custom-modules.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'custom-modules/{custom_module}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomModuleController@update',
        'controller' => 'App\\Http\\Controllers\\CustomModuleController@update',
        'as' => 'superadmin.custom-modules.update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'csrf',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.landing-sites.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'landing-sites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.landing-sites.index',
        'uses' => 'App\\Http\\Controllers\\LandingSiteController@index',
        'controller' => 'App\\Http\\Controllers\\LandingSiteController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.landing-sites.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'landing-sites/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.landing-sites.create',
        'uses' => 'App\\Http\\Controllers\\LandingSiteController@create',
        'controller' => 'App\\Http\\Controllers\\LandingSiteController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.landing-sites.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'landing-sites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.landing-sites.store',
        'uses' => 'App\\Http\\Controllers\\LandingSiteController@store',
        'controller' => 'App\\Http\\Controllers\\LandingSiteController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.landing-sites.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'landing-sites/{landing_site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.landing-sites.show',
        'uses' => 'App\\Http\\Controllers\\LandingSiteController@show',
        'controller' => 'App\\Http\\Controllers\\LandingSiteController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.landing-sites.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'landing-sites/{landing_site}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.landing-sites.edit',
        'uses' => 'App\\Http\\Controllers\\LandingSiteController@edit',
        'controller' => 'App\\Http\\Controllers\\LandingSiteController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.landing-sites.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'landing-sites/{landing_site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.landing-sites.update',
        'uses' => 'App\\Http\\Controllers\\LandingSiteController@update',
        'controller' => 'App\\Http\\Controllers\\LandingSiteController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.landing-sites.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'landing-sites/{landing_site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\SuperAdmin',
          5 => 'clear.customer.language',
          6 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'superadmin.landing-sites.destroy',
        'uses' => 'App\\Http\\Controllers\\LandingSiteController@destroy',
        'controller' => 'App\\Http\\Controllers\\LandingSiteController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'billing.verify-webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhook/billing-verify-webhook/{hash?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\StripeWebhookController@verifyStripeWebhook',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\StripeWebhookController@verifyStripeWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'billing.verify-webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'billing.save_razorpay-webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhook/save-razorpay-webhook/{hash?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\RazorpayWebhookController@saveInvoices',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\RazorpayWebhookController@saveInvoices',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'billing.save_razorpay-webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'flutterwave.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhook/flutter-webhook/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FlutterwavePaymentController@handleGatewayWebhook',
        'controller' => 'App\\Http\\Controllers\\FlutterwavePaymentController@handleGatewayWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'flutterwave.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paystack.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PaystackPaymentController@paymentMainSuccess',
        'controller' => 'App\\Http\\Controllers\\PaystackPaymentController@paymentMainSuccess',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paystack.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paystack.failed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PaystackPaymentController@paymentFailed',
        'controller' => 'App\\Http\\Controllers\\PaystackPaymentController@paymentFailed',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paystack.failed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'billing.save-flutterwave-webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhook/save-flutterwave-webhook/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\FlutterwaveWebhookController@handleWebhook',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\FlutterwaveWebhookController@handleWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'billing.save-flutterwave-webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'billing.save_paypal-webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-paypal-webhook/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PaypalController@verifyBillingIPN',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PaypalController@verifyBillingIPN',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'billing.save_paypal-webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payfast-notification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payfast-notification/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PayFastWebhookController@saveInvoice',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PayFastWebhookController@saveInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payfast-notification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'billing.save-paystack-webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhook/save-paystack-webhook/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\PaystackWebhookController@saveInvoices',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\PaystackWebhookController@saveInvoices',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'billing.save-paystack-webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vA7Zt8wUEh6UHMXP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'offline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vA7Zt8wUEh6UHMXP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'offline',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payfast.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payfast/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PayfastPaymentController@paymentMainSuccess',
        'controller' => 'App\\Http\\Controllers\\PayfastPaymentController@paymentMainSuccess',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payfast.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payfast.failed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payfast/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PayfastPaymentController@paymentFailed',
        'controller' => 'App\\Http\\Controllers\\PayfastPaymentController@paymentFailed',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payfast.failed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payfast.notify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhook/notify/{company}/{reference}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PayfastPaymentController@payfastNotify',
        'controller' => 'App\\Http\\Controllers\\PayfastPaymentController@payfastNotify',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payfast.notify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhook/paypal-webhook/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PaypalPaymentController@handleGatewayWebhook',
        'controller' => 'App\\Http\\Controllers\\PaypalPaymentController@handleGatewayWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paypal.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PaypalPaymentController@success',
        'controller' => 'App\\Http\\Controllers\\PaypalPaymentController@success',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paypal.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paypal.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'paypal/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PaypalPaymentController@cancel',
        'controller' => 'App\\Http\\Controllers\\PaypalPaymentController@cancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paypal.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'paystack.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhook/paystack-webhook/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PaystackPaymentController@handleGatewayWebhook',
        'controller' => 'App\\Http\\Controllers\\PaystackPaymentController@handleGatewayWebhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'paystack.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QtCpnPxdkVTM7bfA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test-pusher-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:387:"function () {
    $pusherSettings = \\App\\Models\\PusherSetting::first();
    $broadcastingDriver = \\config(\'broadcasting.default\');

    return \\response()->json([
        \'pusher_settings\' => $pusherSettings,
        \'broadcasting_driver\' => $broadcastingDriver,
        \'pusher_config\' => \\config(\'broadcasting.connections.pusher\'),
        \'app_env\' => \\app()->environment(),
    ]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000010bb0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QtCpnPxdkVTM7bfA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryDashboardController@index',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryDashboardController@index',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
        'as' => 'inventory.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'units.index',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@index',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@index',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/units/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'units.create',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@create',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@create',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inventory/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'units.store',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@store',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@store',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'units.show',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@show',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@show',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/units/{unit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'units.edit',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@edit',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@edit',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'inventory/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'units.update',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@update',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@update',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'units.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'inventory/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'units.destroy',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@destroy',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\UnitController@destroy',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-item-categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-item-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-item-categories.index',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@index',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@index',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-item-categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-item-categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-item-categories.create',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@create',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@create',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-item-categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inventory/inventory-item-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-item-categories.store',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@store',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@store',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-item-categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-item-categories/{inventory_item_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-item-categories.show',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@show',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@show',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-item-categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-item-categories/{inventory_item_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-item-categories.edit',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@edit',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-item-categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'inventory/inventory-item-categories/{inventory_item_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-item-categories.update',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@update',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@update',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-item-categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'inventory/inventory-item-categories/{inventory_item_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-item-categories.destroy',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@destroy',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-items.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-items.index',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@index',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@index',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-items.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-items/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-items.create',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@create',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@create',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-items.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inventory/inventory-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-items.store',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@store',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@store',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-items.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-items/{inventory_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-items.show',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@show',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@show',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-items.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-items/{inventory_item}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-items.edit',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@edit',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@edit',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-items.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'inventory/inventory-items/{inventory_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-items.update',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@update',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@update',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-items.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'inventory/inventory-items/{inventory_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-items.destroy',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@destroy',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryItemController@destroy',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-stocks.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-stocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-stocks.index',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@index',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@index',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-stocks.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-stocks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-stocks.create',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@create',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@create',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-stocks.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inventory/inventory-stocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-stocks.store',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@store',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@store',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-stocks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-stocks/{inventory_stock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-stocks.show',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@show',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@show',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-stocks.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-stocks/{inventory_stock}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-stocks.edit',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@edit',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@edit',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-stocks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'inventory/inventory-stocks/{inventory_stock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-stocks.update',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@update',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@update',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-stocks.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'inventory/inventory-stocks/{inventory_stock}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-stocks.destroy',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@destroy',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryStockController@destroy',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-movements.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-movements/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@export',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@export',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
        'as' => 'inventory-movements.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-movements.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-movements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-movements.index',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@index',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@index',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-movements.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-movements/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-movements.create',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@create',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@create',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-movements.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inventory/inventory-movements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-movements.store',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@store',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@store',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-movements.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-movements/{inventory_movement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-movements.show',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@show',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@show',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-movements.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-movements/{inventory_movement}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-movements.edit',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@edit',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@edit',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-movements.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'inventory/inventory-movements/{inventory_movement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-movements.update',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@update',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@update',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-movements.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'inventory/inventory-movements/{inventory_movement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-movements.destroy',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@destroy',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryMovementController@destroy',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recipes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/recipes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'recipes.index',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@index',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@index',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recipes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/recipes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'recipes.create',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@create',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@create',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recipes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inventory/recipes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'recipes.store',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@store',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@store',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recipes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/recipes/{recipe}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'recipes.show',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@show',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@show',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recipes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/recipes/{recipe}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'recipes.edit',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@edit',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@edit',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recipes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'inventory/recipes/{recipe}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'recipes.update',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@update',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@update',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'recipes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'inventory/recipes/{recipe}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'recipes.destroy',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@destroy',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventoryRecipeController@destroy',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/purchase-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'purchase-orders.index',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@index',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@index',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/purchase-orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'purchase-orders.create',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@create',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@create',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inventory/purchase-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'purchase-orders.store',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@store',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@store',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/purchase-orders/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'purchase-orders.show',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@show',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@show',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/purchase-orders/{purchase_order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'purchase-orders.edit',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@edit',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@edit',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'inventory/purchase-orders/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'purchase-orders.update',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@update',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@update',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'inventory/purchase-orders/{purchase_order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'purchase-orders.destroy',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@destroy',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@destroy',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/suppliers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'suppliers.index',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@index',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@index',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/suppliers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'suppliers.create',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@create',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@create',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inventory/suppliers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'suppliers.store',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@store',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@store',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/suppliers/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'suppliers.show',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@show',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@show',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/suppliers/{supplier}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'suppliers.edit',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@edit',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@edit',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'inventory/suppliers/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'suppliers.update',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@update',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@update',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'suppliers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'inventory/suppliers/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'suppliers.destroy',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@destroy',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\SupplierController@destroy',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-settings.index',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@index',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@index',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-settings.create',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@create',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@create',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inventory/inventory-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-settings.store',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@store',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@store',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-settings/{inventory_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-settings.show',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@show',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@show',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/inventory-settings/{inventory_setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-settings.edit',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@edit',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@edit',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'inventory/inventory-settings/{inventory_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-settings.update',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@update',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@update',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory-settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'inventory/inventory-settings/{inventory_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'as' => 'inventory-settings.destroy',
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@destroy',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\InventorySettingController@destroy',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase-orders.pdf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/purchase-orders/{purchase_order}/pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@generatePdf',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\PurchaseOrderController@generatePdf',
        'namespace' => NULL,
        'prefix' => '/inventory',
        'where' => 
        array (
        ),
        'as' => 'purchase-orders.pdf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.reports.usage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/reports/usage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\ReportController@usage',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\ReportController@usage',
        'as' => 'inventory.reports.usage',
        'namespace' => NULL,
        'prefix' => 'inventory/reports',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.reports.turnover' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/reports/turnover',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\ReportController@turnover',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\ReportController@turnover',
        'as' => 'inventory.reports.turnover',
        'namespace' => NULL,
        'prefix' => 'inventory/reports',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.reports.forecasting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/reports/forecasting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\ReportController@forecasting',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\ReportController@forecasting',
        'as' => 'inventory.reports.forecasting',
        'namespace' => NULL,
        'prefix' => 'inventory/reports',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.reports.cogs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/reports/cogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\ReportController@cogs',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\ReportController@cogs',
        'as' => 'inventory.reports.cogs',
        'namespace' => NULL,
        'prefix' => 'inventory/reports',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inventory.reports.profit-and-loss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inventory/reports/profit-and-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'App\\Http\\Middleware\\LocaleMiddleware',
        ),
        'uses' => 'Modules\\Inventory\\Http\\Controllers\\ReportController@profitAndLoss',
        'controller' => 'Modules\\Inventory\\Http\\Controllers\\ReportController@profitAndLoss',
        'as' => 'inventory.reports.profit-and-loss',
        'namespace' => NULL,
        'prefix' => 'inventory/reports',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
