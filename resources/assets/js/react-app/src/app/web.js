import React, { Component } from 'react';
import Sidebar from './layout/sidebar';
import Header from './layout/header';
import Content from './layout/content';


class Web extends Component {
  render() {
    return (
      <div>
        <Header/>
        <Sidebar/>
        <Content/>
      </div>
    );
  }
}

export default Web;