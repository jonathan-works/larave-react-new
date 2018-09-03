import React from 'react';
import ReactDOM from 'react-dom';
import Web from './app/web';
import registerServiceWorker from './registerServiceWorker';

ReactDOM.render(<Web/>, document.getElementById('root'));
registerServiceWorker();
