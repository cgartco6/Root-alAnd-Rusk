from PIL import Image, ImageDraw

labels = ["gluten_free", "buttermilk", "bran", "health"]

for name in labels:
    img = Image.new("RGB", (300, 200), color=(245, 240, 230))
    draw = ImageDraw.Draw(img)
    label_text = name.replace("_", " ").title() + " Label"
    draw.text((10, 80), label_text, fill="black")
    img.save(f"{name}_label.png")
