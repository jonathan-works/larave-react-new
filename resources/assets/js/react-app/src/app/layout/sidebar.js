import React, { Component } from 'react';

class Sidebar extends Component {
  render() {

    return (
        <aside className="main-sidebar">
            {/* <!-- sidebar: style can be found in sidebar.less --> */}
            <section className="sidebar">
                {/* <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less --> */}
                <ul className="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="">
                            <i className="fa fa-star" aria-hidden="true"></i> <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </section>
            {/* <!-- /.sidebar --> */}
        </aside>
    );
  }
}
export default Sidebar;
