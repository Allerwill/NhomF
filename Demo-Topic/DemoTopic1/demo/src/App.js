import React, { Component } from "react";

class App extends Component {
  state = {
    firstName: "",
    lastName: "",
    show: [],
  };
  handleChange = (event) => {
    this.setState({
      [event.target.name]: [event.target.value],
    });
  };

  handleSubmit = (e) => {
    e.preventDefault();
    const firstName = this.state.firstName;
    const lastName = this.state.lastName;
    if (firstName.length > 0 && lastName.length > 0) {
      const person = ` ${firstName} ${lastName} `;
      this.setState({
        show: [...this.state.show, person],
        firstName: "",
        lastName: "",
      });
    }
  };
  render() {
    return (
      <section>
        <article>
          <form onSubmit={this.handleSubmit}>
            <br></br>
            HỌ:
            <input
              type="text"
              name="firstName"
              value={this.state.firstName}
              onChange={this.handleChange}
            />
            TÊN
            <input
              type="text"
              name="lastName"
              value={this.state.lastName}
              onChange={this.handleChange}
            />
            <button type="submit">submit</button>
          </form>
        </article>
        <article>
          <h1>Xin chào </h1>
          <h1>
            <div>{this.state.show}</div>
          </h1>
        </article>
      </section>
    );
  }
}

export default App;
