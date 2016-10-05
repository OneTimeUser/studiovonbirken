<?php if(!defined('KIRBY')) exit ?>

# Blueprints for a project

title: Intro
pages: false
files: true
fields:
    title:
        label: Name of Image
        type: text
        required: true
    featured_img:
        label: Featured Image
        type:  imagepicker
        width: 100
        placeholder:
            en: No uploaded images yet
    caption_1:
        label: Caption Line 1 - Category, Year
        type: tags
        index: all
        required: true
        help: "example: Editorial, 2011"

    caption_2:
        label: Caption Line 2 - Client, Name of Project
        type: tags
        index: all
        required: true
        help: "example: Teen Vogue, September cover"

    caption_3:
        label: Caption Line 3 - Collaborator or Agency, Subject or Casting
        type: tags
        index: all
        required: false
        help: "example: Dan Jackson, Emma Stone"

    caption_4:
        label: Caption Line 4 - Colors, Typefaces, Additional Tags
        type: tags
        index: all
        required: false
        help: "examples: neon orange, ITC, Avantgarde"