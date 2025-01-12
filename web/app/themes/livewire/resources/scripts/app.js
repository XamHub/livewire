import domReady from '@roots/sage/client/dom-ready';

import {Livewire} from '../../vendor/livewire/livewire/dist/livewire.esm';

Livewire.start()

import.meta.webpackHot?.accept(console.error);

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
