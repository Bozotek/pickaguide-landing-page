import React from 'react';
import ReactDOM from 'react-dom';
// import Router from 'react-router';
// import { DefaultRoute, Link, Route, RouteHandler } from 'react-router';

import './styles/main.scss';

// import LoginHandler from './components/Login.jsx';
import {HomePage} from './components/HomePage.jsx'

ReactDOM.render(
    <HomePage />,
    document.getElementById('root')
);
//
// class App extends React.Component {
//   render() {
//     return (
//       <div className="nav">
//         <Link to="app">Home</Link>
//         <Link to="login">Login</Link>
//
//         <RouteHandler/>
//       </div>
//     );
//   }
// };
//
// let routes = (
//   <Route name="app" path="/" handler={App}>
//     <Route name="login" path="/login" handler={LoginHandler}/>
//   </Route>
// );
//
// Router.run(routes, function (Handler) {
//   React.render(<Handler/>, document.body);
// });
