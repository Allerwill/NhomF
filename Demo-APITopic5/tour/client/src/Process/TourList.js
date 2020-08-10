import React, { Component } from "react";
import Tour from "../views/Tour";
import "../sassc/tourlist.scss";
// import { tourData } from ".//tourData";
import axios from "axios";
import { Modal, Button, Form, Input, InputNumber } from 'antd';

function upsert(array, item) { // (1)
  const i = array.findIndex(e => e.id == item.id);
  if (i > -1) array[i] = item; // (2)
  else array.push(item);
}

export default class TourList extends Component {
  state = {
    tours: [],
    id: '',
    ten: '',
    gia: '',
    img: '',
    info: '',
    fileSelected: null,
    visible: false,
    isUpdate: false
  };

  formRef = React.createRef();

  onHandleSubmitModal = () => {
    if (this.state.isUpdate) {
      this.updateTour()
    } else
      this.addTour()
    this.formRef.current.resetFields();
  }

  addTour = async () => {
    try {
      let { ten, gia, info, fileSelected } = this.state
      if (ten && gia && info && fileSelected) {
        let formData = new FormData()
        formData.append('ten', ten)
        formData.append('gia', gia)
        formData.append('info', info)
        formData.append('image', fileSelected)

        const res = await axios.post(`http://localhost:5000/tours/`, formData);

        if (res.data) {
          const { tours } = this.state;
          tours.push(res.data)
          this.setState({
            tours: tours,
            ten: '',
            gia: '',
            img: '',
            info: '',
            fileSelected: null,
            visible: false
          });
        }
      } else
        alert('Please fill all fields')
    } catch (err) {
      alert('ERROR!')
    }
  }

  updateTour = async () => {
    try {
      let { id, ten, gia, info, img, fileSelected } = this.state
      if (ten && gia && info) {
        let formData = new FormData()

        formData.append('ten', ten)
        formData.append('gia', gia)
        formData.append('info', info)
        formData.append('img', img)

        if (fileSelected)
          formData.append('image', fileSelected)

        let res = await axios.put(`http://localhost:5000/tours/${id}`, formData);

        if (res.data) {
          const { tours } = this.state;

          upsert(tours, res.data)

          this.setState({
            tours: tours,
            ten: '',
            gia: '',
            img: '',
            info: '',
            fileSelected: null,
            visible: false
          });
        }
      } else
        alert('Please fill all fields')
    } catch (err) {
      alert('ERROR!')
    }
  };

  removeTour = async (id) => {
    try {
      const res = await axios.delete(`http://localhost:5000/tours/${id}`);

      if (res.data.success) {
        const { tours } = this.state;
        const sortedTours = tours.filter((tour) => tour.id !== id);
        this.setState({
          tours: sortedTours,
        });
      }
    } catch (err) {
      console.log(err);
    }
  };

  showTour = async (id) => {
    try {
      const tour = this.state.tours.find(e => e.id === id)
      const { ten, gia, info, img } = tour
      this.setState({
        id,
        ten,
        gia,
        info,
        img,
        visible: true,
        isUpdate: true
      })
    } catch (err) {
      console.log(err);
    }
  };

  showModal = () => {
    this.setState({
      visible: true,
    });
  };

  handleCancel = e => {
    this.formRef.current.resetFields();
    this.setState({
      ten: '',
      gia: '',
      img: '',
      info: '',
      fileSelected: null,
      visible: false,
      isUpdate: false
    });
  };

  async componentDidMount() {
    try {
      const res = await axios.get("http://localhost:5000/tours");

      this.setState({ tours: res.data });
    } catch (err) {
      console.log(err);
    }
  }

  layout = {
    labelCol: { span: 4 },
    wrapperCol: { span: 18 },
  };

  onChangeHandle = e => {
    this.setState({
      [e.target.name]: e.target.value
    })
  }

  onChangeFileHandle = e => {
    let file = e.target.files[0]
    if (file.type.includes('image')) {
      this.setState({
        fileSelected: file
      })
    } else {
      this.setState({
        fileSelected: null
      })
      alert('Please select a image')
    }
  }

  render() {
    // console.log(this.state.tours);
    const { tours } = this.state;

    return (
      <>

        <Button type="primary" onClick={this.showModal}>
          New Tour
        </Button>
        <Modal
          title="Create New Tour"
          visible={this.state.visible}
          onOk={this.onHandleSubmitModal}
          onCancel={e => this.handleCancel(e)}
        >
          <Form ref={this.formRef} {...this.layout}>
            <Form.Item name={['ten']} label="Ten" rules={[{ required: true }]}>
              <input type='text' placeholder={this.state.ten} name='ten' onChange={e => this.onChangeHandle(e)} />
            </Form.Item>
            <Form.Item name={['gia']} label="Gia" rules={[{ required: true }]}>
              <input type='text' placeholder={this.state.gia} name='gia' onChange={e => this.onChangeHandle(e)} />
            </Form.Item>
            <Form.Item name={['info']} label="Info" rules={[{ required: true }]}>
              <input type='text' placeholder={this.state.info} name='info' onChange={e => this.onChangeHandle(e)} />
            </Form.Item>
            <Form.Item name={['image']} label="Image" rules={[{ required: true }]}>
              <input name='image' type='file' onChange={e => this.onChangeFileHandle(e)} />
            </Form.Item>
          </Form>
        </Modal>

        <section className="tourlist">
          {tours.map((tour) => (
            <Tour key={tour.id} tour={tour} removeTour={this.removeTour} showTour={this.showTour} />
          ))}
        </section>
      </>
    );
  }
}
