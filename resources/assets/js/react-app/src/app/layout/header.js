import React, { Component } from 'react';

class Header extends Component {
  render() {

    return (
        <header className="main-header">
                {/* Logo */}
                <a href="" className="logo">
                    <span className="logo-mini"><b>Foto</b>já</span>
                    <span className="logo-lg"><b>Foto já</b></span>
                </a>

                <nav className="navbar navbar-static-top">

                    <a href="#" className="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span className="sr-only">Toggle navigation</span>
                    </a>

                    <div className="navbar-custom-menu">
                        <ul className="nav navbar-nav">
                            <li className="dropdown user user-menu">
                                <a href="#" className="dropdown-toggle" data-toggle="dropdown">
                                    <span className="hidden-xs">Admin</span>
                                </a>
                                <ul className="dropdown-menu">

                                    <li className="user-footer">
                                        <div className="pull-right">
                                            <a href="/cms/logout" className="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
        </header>
    );
  }
}
export default Header;
