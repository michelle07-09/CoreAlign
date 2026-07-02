import sys
import re

def convert_html_to_jsx(html_content):
    # Extract the <main> block
    match = re.search(r'<main[^>]*>(.*?)</main>', html_content, re.DOTALL | re.IGNORECASE)
    if not match:
        return ""
    main_content = match.group(1)

    # Convert class= to className=
    jsx = re.sub(r'\bclass=', 'className=', main_content)
    
    # Fix self-closing tags (img, input, hr, br)
    jsx = re.sub(r'<(img|input|hr|br)([^>]*?)(?<!/)>', r'<\1\2 />', jsx)
    
    # Remove HTML comments (or convert to JSX comments)
    jsx = re.sub(r'<!--(.*?)-->', r'{/* \1 */}', jsx, flags=re.DOTALL)
    
    return jsx

if __name__ == "__main__":
    if len(sys.argv) < 5:
        print("Usage: python html2jsx.py <input_html> <output_jsx> <component_name> <title> <layout_name>")
        sys.exit(1)
        
    input_file = sys.argv[1]
    output_file = sys.argv[2]
    component_name = sys.argv[3]
    title = sys.argv[4]
    layout_name = sys.argv[5]

    with open(input_file, 'r', encoding='utf-8') as f:
        html = f.read()

    jsx_content = convert_html_to_jsx(html)

    template = f"""import React from 'react';
import {layout_name} from '../../Layouts/{layout_name}';
import {{ Head }} from '@inertiajs/react';

export default function {component_name}() {{
    return (
        <{layout_name} title="{title}">
            <Head title="{title}" />
            {{/* Main Content */}}
            {jsx_content}
        </{layout_name}>
    );
}}
"""
    with open(output_file, 'w', encoding='utf-8') as f:
        f.write(template)
    print(f"Successfully converted {input_file} to {output_file}")
