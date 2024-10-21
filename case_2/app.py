import gradio as gr
USERNAME = 'admin'
PASSWORD = 'admin'


def greet(name):
    return "Hello " + name + "!"

def authenticate(username, password):
    if username == USERNAME and password == PASSWORD:
        return True
        
    else:
        return False

def upload_block():
    file = gr.File()
    upload_btn = gr.Button("upload")

with gr.Blocks() as demo:
    name = gr.Textbox(label="Name")
    output = gr.Textbox(label="Output Box")
    greet_btn = gr.Button("Greet")

    upload_block()
    greet_btn.click(fn=greet, inputs=name, outputs=output, api_name="greet")

demo.launch(debug = True, auth = authenticate)
