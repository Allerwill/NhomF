import React, { Component } from "react";
import "./name.scss";
export default class UserName extends Component {
  constructor(props) {
    super(props);
    this.state = { userName: "Anh" };
  }
  changeState = () => {
    this.setState({ userName: this.state.userName == "Anh" ? "Đức" : "Anh" });
  };

  render() {
    return (
      <div>
        <h4 className="name">
          {this.state.userName}
          <p>
            {" "}
            <button className="btn btn-danger m-2" onClick={this.changeState}>
              Change
            </button>
          </p>
        </h4>
      </div>
    );
  }
}
